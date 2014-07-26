<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        autoloadManager.php
 *
 * @author      Al-Fallouji Bashar
 * @author      Charron Pierrick
 * @version     2.0
 */


if (!defined('T_NAMESPACE'))
{
    /**
     * This is just for backword compatibilty with previous versions
     * Token -1 will never exists but we just want to avoid having undefined
     * constant
     */
    define('T_NAMESPACE', -1);
    define('T_NS_SEPARATOR', -1);
}
if (!defined('T_TRAIT'))
{
    define('T_TRAIT', -1);
}

/**
 * autoloadManager class
 *
 * Handles the class autoload feature
 *
 * Register the loadClass function: $autoloader->register();
 * Add a folder to process: $autoloader->addFolder('{YOUR_FOLDER_PATH}');
 *
 * Read documentation for more information.
 */
class autoloadManager
{
    /**
     * Constants used by the checkClass method
     * @var int
     */
    const CLASS_NOT_FOUND = 0;
    const CLASS_EXISTS    = 1;
    const CLASS_IS_NULL   = 2;

    /**
     * Constants used for the scan options
     * @var int
     */
    const SCAN_NEVER   = 0; // 0b000
    const SCAN_ONCE    = 1; // 0b001
    const SCAN_ALWAYS  = 3; // 0b011
    const SCAN_CACHE   = 4; // 0b100

    /**
     * Folders that should be parsed
     * @var array
     */
    private $_folders = array();

    /**
     * Excluded folders
     * @var array
     */
    private $_excludedFolders = array();

    /**
     * Classes and their matching filename
     * @var array
     */
    private $_classes = array();

    /**
     * Scan files matching this regex
     * @var string
     */
    private $_filesRegex = '/\.(inc|php)$/';

    /**
     * Save path (Default is null)
     * @var string
     */
    private $_saveFile = null;

    /**
     * Scan options
     * @var Integer (options)
     */
    private $_scanOptions = self::SCAN_ONCE;

    /**
     * Constructor
     *
     * @param string $saveFile    Path where autoload files will be saved
     * @param int    $scanOptions Scan options
     * @return void
     */
    public function __construct($saveFile = null, $scanOptions = self::SCAN_ONCE)
    {
        $this->setSaveFile($saveFile);
        $this->setScanOptions($scanOptions);
    }

    /**
     * Get the path where autoload files are saved
     *
     * @return string path where autoload files will be saved
     */
    public function getSaveFile()
    {
        return $this->_saveFile;
    }

    /**
     * Set the path where autoload files are saved
     *
     * @param string $path path where autoload files will be saved
     */
    public function setSaveFile($pathToFile)
    {
        $this->_saveFile = $pathToFile;
        if ($this->_saveFile && file_exists($this->_saveFile))
        {
            $this->_classes = include($this->_saveFile);
        }
    }

    /**
     * Set the file regex
     *
     * @param string
     */
    public function setFileRegex($regex)
    {
        $this->_filesRegex = $regex;
    }
    
    /**
     * Set the file extensions
     *
     * Another method to set up the $_filesRegex
     * 
     * @param string|array allowed extension string or array with extension strings
     * @return void
     */
    public function setAllowedFileExtensions($extensions)
    {
        $regex = '/\.';
        if (is_array($extensions))
        {
            $regex .= '(' . implode('|', $extensions) . ')';
        }
        else {
            $regex .= $extensions;
        }
        
        $this->_filesRegex = $regex . '$/';
    }

    /**
     * Add a new folder to parse
     *
     * @param string $path Root path to process
     */
    public function addFolder($path)
    {
        if ($realpath = realpath($path) and is_dir($realpath))
        {
            $this->_folders[] = $realpath;
        }
        else
        {
            throw new Exception('Failed to open dir : ' . $path);
        }
    }

    /**
     * Exclude a folder from the parsing
     *
     * @param string $path Folder to exclude
     */
    public function excludeFolder($path)
    {
        if ($realpath = realpath($path) and is_dir($realpath))
        {
            $this->_excludedFolders[] = $realpath . DIRECTORY_SEPARATOR;
        }
        else
        {
            throw new Exception('Failed to open dir : ' . $path);
        }
    }

    /**
     * Checks if the class has been defined
     *
     * @param string $className Name of the class
     * @return bool true if class exists, false otherwise.
     */
    public function classExists($className)
    {
        return self::CLASS_EXISTS === $this->checkClass($className, $this->_classes);
    }

    /**
     * Set the scan options
     *
     * @param  int $options scan options.
     * @return void
     */
    public function setScanOptions($options)
    {
        $this->_scanOptions = $options;
    }

    /**
     * Get the scan options.
     *
     * @return int
     */
    public function getScanOptions()
    {
        return $this->_scanOptions;
    }

    /**
     * Method used by the spl_autoload_register
     *
     * @param string $className Name of the class
     * @return void
     */
    public function loadClass($className)
    {
        $className = strtolower($className);
        // check if the class already exists in the cache file
        $loaded = $this->checkClass($className, $this->_classes);
        if (!$loaded && (self::SCAN_ONCE & $this->_scanOptions))
        {
            // parse the folders returns the list of all the classes
            // in the application
            $this->refresh();

            // recheck if the class exists again in the reloaded classes
            $loaded = $this->checkClass($className, $this->_classes);
            if (!$loaded && (self::SCAN_CACHE & $this->_scanOptions))
            {
                // set it to null to flag that it was not found
                // This behaviour fixes the problem with infinite
                // loop if we have a class_exists() for an inexistant
                // class.
                $this->_classes[$className] = null;
            }

            // write to a single file
            if ($this->getSaveFile())
            {
                $this->saveToFile($this->_classes);
            }

            // scan just once per call
            if (!($this->_scanOptions & 2))
            {
                $this->_scanOptions = $this->_scanOptions & ~ self::SCAN_ONCE;
            }
        }
    }

    /**
     * checks if a className exists in the class array
     *
     * @param  mixed  $className    the classname to check
     * @param  array  $classes      an array of classes
     * @return int    errorCode     1 if the class exists
     *                              2 if the class exists and is null
     *                              (there have been an attempt done)
     *                              0 if the class does not exist
     */
    private function checkClass($className, array $classes)
    {
        if (isset($classes[$className]))
        {
            require $classes[$className];
            return self::CLASS_EXISTS;
        }
        elseif (array_key_exists($className, $classes))
        {
            return self::CLASS_IS_NULL;
        }
        return self::CLASS_NOT_FOUND;
    }


    /**
     * Parse every registred folders, regenerate autoload files and update the $_classes
     *
     * @return array Array containing all the classes found
     */
    private function parseFolders()
    {
        $classesArray = array();
        foreach ($this->_folders as $folder)
        {
            $classesArray = array_merge($classesArray, $this->parseFolder($folder));
        }
        return $classesArray;
    }

    /**
     * Parse folder and update $_classes array
     *
     * @param string $folder Folder to process
     * @return array Array containing all the classes found
     */
    private function parseFolder($folder)
    {
        $classes = array();
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($folder));

        foreach ($files as $file)
        {
            if ($file->isFile() && preg_match($this->_filesRegex, $file->getFilename()))
            {
                foreach ($this->_excludedFolders as $folder)
                {
                    $len = strlen($folder);
                    if (0 === strncmp($folder, $file->getPathname(), $len))
                    {
                        continue 2;
                    }
                }

                if ($classNames = $this->getClassesFromFile($file->getPathname()))
                {
                    foreach ($classNames as $className)
                    {
                        // Adding class to map
                        $classes[$className] = $file->getPathname();
                    }
                }
            }
        }
        return $classes;
    }

    /**
     * Extract the classname contained inside the php file
     *
     * @param string $file Filename to process
     * @return array Array of classname(s) and interface(s) found in the file
     */
    private function getClassesFromFile($file)
    {
        $namespace = null;
        $classes = array();
        $tokens = token_get_all(file_get_contents($file));
        $nbtokens = count($tokens);

        for ($i = 0 ; $i < $nbtokens ; $i++)
        {
            switch ($tokens[$i][0])
            {
                case T_NAMESPACE:
                    $i+=2;
                    while ($tokens[$i][0] === T_STRING || $tokens[$i][0] === T_NS_SEPARATOR)
                    {
                        $namespace .= $tokens[$i++][1];
                    }
                    break;
                case T_INTERFACE:
                case T_CLASS:
                case T_TRAIT:
                    $i+=2;
                    if ($namespace)
                    {
                        $classes[] = strtolower($namespace . '\\' . $tokens[$i][1]);
                    }
                    else
                    {
                        $classes[] = strtolower($tokens[$i][1]);
                    }
                    break;
            }
        }

        return $classes;
    }

    /**
     * Generate a file containing an array.
     * File is generated under the _savePath folder.
     *
     * @param array  $classes Contains all the classes found and the corresponding filename (e.g. {$className} => {fileName})
     * @param string $folder Folder to process
     * @return void
     */
    private function saveToFile(array $classes)
    {
        // Write header and comment
        $content  = '<?php ' . PHP_EOL;
        $content .= '/** ' . PHP_EOL;
        $content .= ' * AutoloadManager Script' . PHP_EOL;
        $content .= ' * ' . PHP_EOL;
        $content .= ' * @authors      Al-Fallouji Bashar & Charron Pierrick' . PHP_EOL;
        $content .= ' * ' . PHP_EOL;
        $content .= ' * @description This file was automatically generated at ' . date('Y-m-d [H:i:s]') . PHP_EOL;
        $content .= ' * ' . PHP_EOL;
        $content .= ' */ ' . PHP_EOL;

        // Export array
        $content .= 'return ' . var_export($classes, true) . ';';
        file_put_contents($this->getSaveFile(), $content);
    }

    /**
     * Returns previously registered classes
     *
     * @return array the list of registered classes
     */
    public function getRegisteredClasses()
    {
        return $this->_classes;
    }

    /**
     * Refreshes an already generated cache file
     * This solves problems with previously unexistant classes that
     * have been made available after.
     * The optimize functionnality will look at all null values of
     * the available classes and does a new parse. if it founds that
     * there are classes that has been made available, it will update
     * the file.
     *
     * @return bool true if there has been a change to the array, false otherwise
     */
    public function refresh()
    {
        $existantClasses = $this->_classes;
        $nullClasses = array_filter($existantClasses, array('self','_getNullElements'));
        $newClasses = $this->parseFolders();

        // $newClasses will override $nullClasses if the same key exists
        // this allows new added classes (that were flagged as null) to be
        // added
        $this->_classes = array_merge($nullClasses, $newClasses);
        return true;
    }

    /**
     * Generate the autoload file
     *
     * @return void
     */
    public function generate()
    {
        if ($this->getSaveFile())
        {
            $this->refresh();
            $this->saveToFile($this->_classes);
        }
    }

    /**
     * returns null elements (used in an array filter)
     *
     * @param mixed $element the element to check
     * @return bool true if element is null, false otherwise
     */
    private function _getNullElements($element)
    {
        return null === $element;
    }

    /**
     * Registers this autoloadManager on the SPL autoload stack.
     *
     * @return void
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    /**
     * Removes this autoloadManager from the SPL autoload stack.
     *
     * @return void
     */
    public function unregister()
    {
        spl_autoload_unregister(array($this, 'loadClass'));
    }
}

