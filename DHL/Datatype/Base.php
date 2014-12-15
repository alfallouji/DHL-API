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
 * File:        Base.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype;

/**
 * Abstract class for each datatype used by the models by DHL
 */
abstract class Base
{
    /**
     * Properties definitions
     * @var array
     */
    protected $_params = array();

    /**
     * Property values bag
     * @var array
     */
    protected $_values = array();

    /**
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = null;

    /**
     * Class constructor
     */ 
    public function __construct()
    {
        $this->initializeValues();
    }

    /**
     * Check if current object is empty or not
     * 
     * @return boolean True if it is, false otherwise
     */
    public function isEmpty()
    {
        foreach ($this->_values as $k => $v) 
        {
            if (is_object($v))
            {
                if (!$v->isEmpty()) 
                { 
                    return false;
                }
            }
            elseif (!empty($v) && $v !== null)
            {
                return false;
            }
        }

        return true;
    }

    /**
     * Generates the XML to be sent to DHL
     * 
     * @param \XMLWriter $xmlWriter XMl Writer instance
     * 
     * @return void
     */
    public function toXML(\XMLWriter $xmlWriter = null)
    {
        if ($this->isEmpty())
        {
            return;
        }

        $displayedParentNode = false;
        $this->validateParameters();

        if (null !== $this->_xmlNodeName) 
        {
            $parentNode = $this->_xmlNodeName;
        }
        else
        {
            $parts = explode('\\', get_class($this));
            $parentNode = array_pop($parts);
        }

        $xmlWriter->startElement($parentNode);

        foreach ($this->_params as $name => $infos) 
        {
            if ($this->$name) 
            {
                if (is_object($this->$name)) 
                {
                    $this->$name->toXML($xmlWriter);
                }
                elseif (is_array($this->$name)) 
                {
                    if ('string' == $this->_params[$name]['type'])
                    {
                        foreach ($this->$name as $subelement)
                        {
                            $xmlWriter->writeElement($name, $subelement);
                        }
                    }
                    else
                    {
                        if (!isset($this->_params[$name]['disableParentNode']) || false == $this->_params[$name]['disableParentNode']) 
                        {              
                            $xmlWriter->startElement($name);
                        }

                        foreach ($this->$name as $subelement) 
                        {
                            $subelement->toXML($xmlWriter);
                        }

                        if (!isset($this->_params[$name]['disableParentNode']) || false == $this->_params[$name]['disableParentNode']) 
                        {              
                            $xmlWriter->endElement();
                        }
                    }
                }
                else
                {
                    $xmlWriter->writeElement($name, $this->$name);
                }
            }
        }

        $xmlWriter->endElement(); // End of parent node
    }

    /**
     * Initialize object from an XML string
     * 
     * @param string $xml XML String
     * 
     * @return void
     */
    public function initFromXML($xml) 
    {
        $xml = simplexml_load_string(str_replace('req:', '', $xml));
        $parts = explode('\\', get_class($this));
        $className = array_pop($parts);
        foreach ($xml->children() as $child) 
        {           
            $childName = $child->getName();

            if (isset($this->$childName) && is_object($this->$childName))
            {
                $this->$childName->initFromXml($child->asXML());
            }
            elseif (isset($this->_params[$childName]['multivalues']) && $this->_params[$childName]['multivalues'])
            {
                foreach ($child->children() as $subchild) 
                {
                    $subchildName = $subchild->getName();
                    $childClassname = implode('\\', $parts) . '\\' . $this->_params[$subchildName]['type'];
                    $childClassname = str_replace('Entity', 'Datatype', $childClassname);
                    if ('string' == $this->_params[$subchildName]['type'])
                    {
                        $childObj = trim((string) $subchild);
                    }
                    else
                    {
                        $childObj = new $childClassname();
                        $childObj->initFromXml($subchild->asXML());
                    }
                    $addMethodName = 'add' . ucfirst($subchildName);
                    $this->$addMethodName($childObj);
                }
            }
            elseif (isset($this->$childName) && ((string) $child))
            {
                $this->$childName = trim((string) $child);
            }
        }
    }

    /**
     * Setter for multivalues field
     * 
     * @param string $key Key to set
     * @param mixed $value Value to set
     * 
     * @return void
     * @throws \InvalidArgumentException Throws exception if key is not valid
     */
    public function __call($name, $arguments) 
    {
        $key = str_replace('add', '', $name);

        if (isset($this->_params[$key . 's']) 
            && $this->_params[$key . 's']['type'] != 'string' 
            && isset($this->_params[$key. 's']['multivalues']) 
            && true === $this->_params[$key . 's']['multivalues'])
        {
            $key .= 's';
        }

        if (!array_key_exists($key, $this->_values))
        {
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for ' . get_class($this));
        }

        if (empty($arguments) && count($arguments) > 1) 
        {
            throw new \InvalidArgumentException($name . ' method takes only 1 argument');
        }

        $this->validateParameterType($key, $arguments[0]);
        $this->validateParameterValue($key, $arguments[0]);
        
        if (isset($this->_params[$key]['multivalues']) && $this->_params[$key]['multivalues'])
        {
            $this->_values[$key][] = $arguments[0];
        }
        else
        {
            throw new \InvalidArgumentException('This is not a multivalues field : ' . $key . ' called via method ' . $name);
        }
    }
 
    /**
     * Magic isset function
     * 
     * @param string $key Key to check
     * 
     * @return bolean True if it exsits, false otherwise 
     */
    final public function __isset($key) 
    {
        return array_key_exists($key, $this->_values);
    }

    /**
     * Magic getter function
     * 
     * @param string $key Key to get
     * 
     * @return mixed Value of the property 
     * @throws \InvalidArgumentException Throws exceptin if key is not valid
     */
    final public function __get($key) 
    {
        if (!array_key_exists($key, $this->_values))
        {
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for ' . get_class($this));
        }

        return $this->_values[$key];
    }

    /**
     * Magic setter function
     * 
     * @param string $key Key to set
     * @param mixed $value Value to set
     * 
     * @return void
     * @throws \InvalidArgumentException Throws exception if key is not valid
     */
    final public function __set($key, $value) 
    {
        if (!array_key_exists($key, $this->_values))
        {
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for ' . get_class($this));
        }

        $this->validateParameterType($key, $value);
        $this->validateParameterValue($key, $value);
        $this->_values[$key] = $value;
    }
 
    /**
     * Initialize property values bag
     *
     * @return void
     */
    protected function initializeValues()
    {
        foreach ($this->_params as $name => $infos) 
        {
            if (isset($infos['multivalues']) && $infos['multivalues']) 
            {
                $this->_values[$name] = array();
            }
            elseif (isset($infos['subobject']) && $infos['subobject'])
            {
                $tmp = get_class($this);
                $parts = explode('\\', $tmp);
                array_pop($parts);
                $className = implode('\\', $parts) . '\\' . $infos['type'];
                $this->_values[$name] = new $className();
            }
            else
            {
                $this->_values[$name] = null;
            }
        }
    }

    /**
     * Validate all parameters
     * 
     * @return boolean True upon success
     * @throws \InvalidArgumentException Throws exception if type not valid or if value are missing
     */
    protected function validateParameters()
    {
        foreach ($this->_params as $name => $infos) 
        {
            if ($this->_values[$name]) 
            {
                if (is_array($this->_values[$name]) && isset($infos['subobject']) && true === $infos['subobject']) 
                {
                    foreach ($this->_values[$name] as $subelement)
                    {
                        $subelement->validateParameters();
                    }
                }
                else 
                {
                    $this->validateParameterType($name, $this->_values[$name]);
                    $this->validateParameterValue($name, $this->_values[$name]);
                }
            }
        }

        return true;
    }

    /**
     * Validate the type of a parameter
     * 
     * @param string $key Key to check
     * @param mixed $value Value to check
     * 
     * @return boolean True upon success
     * @throws \InvalidArgumentException Throws exception if type is not valid
     */
    protected function validateParameterType($key, $value)
    {
        if (null === $value) 
        {
            return true;
        }

        switch ($this->_params[$key]['type']) 
        {
            case 'string':
                if (is_array($value) && isset($this->_params[$key]['multivalues']) && true === $this->_params[$key]['multivalues']) 
                {
                    foreach ($value as $subvalue) 
                    {
                        if (null !== $subvalue && $subvalue !== (string) $subvalue) 
                        {
                            throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' 
                                . $this->_params[$key]['type'] . ' but it has a value of : ' . $subvalue);
                        }
                    }
                }
                elseif ($value !== (string) $value)
                {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' 
                        . $this->_params[$key]['type'] . ' but it has a value of : ' . $value);
                }
            break;

            case 'datetime':
            case 'date-iso8601':
                $timestamp = strtotime($value);
                $date = date(DATE_ISO8601, $timestamp);
                if (strtotime($date) !== strtotime($value))
                {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' 
                        . $this->_params[$key]['type'] . ' but it has a value of : ' . $value);
                }
            break;

            case 'positiveInteger':
            case 'negativeInteger':
            case 'integer':
                 if (false === filter_var((int) $value, FILTER_VALIDATE_INT) && ((int) $value != $value)) 
                 {
                     throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' 
                        . $this->_params[$key]['type'] . ' but it has a value of : ' . $value);
                 }
            break;

            default:
                if (isset($this->_params[$key]['subobject']) && $this->_params[$key]['subobject'])
                {
                    $currentClass = get_class($value);
                    $parts = explode('\\', $currentClass);
                    array_pop($parts);
                    $className = str_replace('Entity', 'DataType', implode('\\', $parts) . '\\' . $this->_params[$key]['type']);
                    if (!$value instanceof $className)
                    {
                        throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' 
                            . $this->_params[$key]['type'] . ' but it has a value of : "' . print_r($value, true) . '"');
                    }
                }
            break;
        }

        return true;
    }

    /**
     * Validate the value of a parameter
     * 
     * @param string $key Key to check
     * @param mixed $value Value to check
     * 
     * @return boolean True upon success
     * @throws \InvalidArgumentException Throws exception if value is not valid
     */
    protected function validateParameterValue($key, $value)
    {
        foreach ($this->_params[$key] as $type => $typeValue) 
        {
            switch ($type) 
            {
                case 'enumeration':
                    $acceptedValues = explode(',', $typeValue);
                    if (!in_array($value, $acceptedValues)) 
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' cannot be set to value : ' . $value . '. Accepted values are : ' . $typeValue);
                    }
                break;
           
                case 'length':
                    if (strlen($value) != $typeValue)
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' has a size of ' . strlen($value) . ' and it should be that size : ' . $typeValue);
                    }
                break;

                case 'maxLength':
                    if (strlen($value) > $typeValue)
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' has a size of ' . strlen($value) . ' and it cannot exceed this size : ' . $typeValue);
                    }
                break;

                case 'minLength':
                    if (strlen($value) < $typeValue)
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' has a size of ' . strlen($value) . ' and it cannot be less than this size : ' . $typeValue);
                    }
                break;
 
                case 'minInclusive':
                    if ($value < $typeValue)
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' cannot be smaller than ' . $typeValue);
                    }
                break;
 
                case 'maxInclusive':
                    if ($value > $typeValue)
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' cannot be higher than ' . $typeValue);
                    }
                break;

                case 'pattern':
                    $matches = array();
                    $typeValue = "/" . $typeValue . "/";
                    if (1 !== preg_match($typeValue, $value, $matches) || (strlen($value) > 0 && !$matches[0])) 
                    {
                        throw new \InvalidArgumentException('Field ' . $key . ' should match regex pattern : ' . $typeValue . ' and it has a value of ' . $value);
                    }
                break;
            }
        }

        return true;
    }
}
