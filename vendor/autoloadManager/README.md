    
                        _______________________
  
                        AutoLoad Manager README
                        _______________________
                         

AUTHORS & CONTACT
=================

Al-Fallouji Bashar 
    - bashar@alfallouji.com

Charron Pierrick
    - pierrick@webstart.fr

    
DOCUMENTATION & DOWNLOAD
========================

Latest version is available on github at :
    - http://github.com/alfallouji/PHP-Autoload-Manager/

Documentation can be found on : 
    - http://bashar.alfallouji.com/PHP-Autoload-Manager/


LICENSE
=======

This Code is released under the GNU LGPL

Please do not change the header of the file(s).

This library is free software; you can redistribute it and/or modify it 
under the terms of the GNU Lesser General Public License as published 
by the Free Software Foundation; either version 2 of the License, or 
(at your option) any later version.

This library is distributed in the hope that it will be useful, but 
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
or FITNESS FOR A PARTICULAR PURPOSE.

See the GNU Lesser General Public License for more details.


DESCRIPTION
===========

AutoLoad Manager is a generic autoloader that can be used with any
framework or library.

Using the PHP tokenizer mechanism, it will parse folder(s) and discover
the different classes and interfaces defined.

The big advantage of using this autoloadManager is that it will allow
you to implement whatever naming rules you want and may have mutliple
classes in one file (if you want to have a such feature).

So basically, you don’t have anymore to implement some complex naming rules
between the filename and the classname. You may organize the way you want
your API (may have as many subfolders as you want, or have multiple 
API folders, etc.).


How does it work ?
==================

It will scan any given folder and find any defined PHP classes or interfaces. 
It will then create an hashtable that will reference what class can be 
found in what file. This hash table is serialized and cached in a file.

Whenever, your program or script will look for a non-existing class, 
the autoloadManager will look on that hash table and load the file if it exists. 

A fallback mechanism can be used also in a development environment that will 
try to rescan all the folders once more (this mechanism is usefull when 
you are often adding new classes to your program).


How can I use it ?
==================

First, you will have simply to load the autoloadManager class into your script.

    include('api/autoloadManager.php'); 


Secondly, you will have to instanciate your autoloadManager and define
the path where the autoloadManager will store the file containing the
hash table.

    $autoloadManager = new AutoloadManager();
    $autoloadManager->setSaveFile('./autoload.php');

Then, you have the four main features offered by this script.

1. Register the loadClass function:

    $autoloadManager->register();

2. Add a folder to process:

    $autoloadManager->addFolder('{YOUR_FOLDER_PATH}');


For instance, if your classes are found in ‘/var/www/myProject/lib’ and 
‘/var/www/myProject/includes’, then you can do something like this.

    $autoloadManager->addFolder('/var/www/myProject/lib');
    $autoloadManager->addFolder('/var/www/myProject/includes');
    $autoloadManager->register();

3. Add or remove file extensions to scan:

By default the autoloadManager will parse all .php and .inc files. You can
modify this behavior by using the setFileRegex method as bellow

    $autoloadManager->setFileRegex('/\.php$/');


4. Exclude a folder from the process list:

    $autoloadManager->excludeFolder('/var/www/myProject/includes/lib1');
