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
            elseif ($v !== null)
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

        $parts = explode('\\', get_class($this));
        $parentNode = array_pop($parts);

        $xmlWriter->startElement($parentNode);
        foreach ($this->_params as $name => $infos) 
        {
            if ($this->$name) 
            {
                if (is_object($this->$name)) 
                {
                    $this->$name->toXML($xmlWriter);
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
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for this object');
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
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for this object');
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
            if (isset($infos['subobject']) && $infos['subobject'])
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
                $this->validateParameterType($name, $this->_values[$name]);
                $this->validateParameterValue($name, $this->_values[$name]);
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
        switch ($this->_params[$key]['type']) 
        {
            case 'string':
                if ($value !== (string) $value)
                {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' . $this->_params[$key]['type'] . ' but it has a value of : ' . $value);
                }
            break;

            case 'date-iso8601':
                $timestamp = strtotime($value);
                $date = date(DATE_ISO8601, $timestamp);
                if (strtotime($date) !== strtotime($value))
                {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' . $this->_params[$key]['type'] . ' but it has a value of : ' . $value);
                }
            break;

            case 'integer':
                 if (!filter_var($value, FILTER_VALIDATE_INTEGER)) 
                 {
                     throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : ' . $this->_params[$key]['type'] . ' but it has a value of : ' . $value);
                 }
            break;

            default:
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
            }
        }

        return true;
    }
}
