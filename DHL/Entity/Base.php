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

namespace DHL\Entity;

/**
 * Abstract class for each entity model used by DHL
 */
abstract class Base
{
    /**
     * Property values bag
     * @var array
     */
    private $_values = array();

    /**
     * Properties definitions
     * @var array
     */
    private $_params = array();

    /**
     * Parameters to be used in the header
     * @var array
     */
    private $_headerParams = array(
        'MessageTime' => array(
            'type' => 'date-iso8601',
            'required' => true,
        ),
        'MessageReference' => array(
            'type' => 'string',
            'required' => true,
            'size' => 28,
        ),
        'SiteID' => array(
            'type' => 'string',
            'required' => true,
        ),
        'Password' => array(
            'type' => 'string',
            'required' => true,
        ),
    );

    /**
     * Parameters to be used in the body 
     * @var array
     */
    protected $_bodyParams = array();

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = null;

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = null;

    /**
     * @var boolean
     * Is object a subobject or not
     */
    protected $_isSubobject = null;

    /**
     * @var boolean
     * Render the schema version or not
     */
    protected $_displaySchemaVersion = false;

    /**
     * Class constants
     */
    const DHL_REQ = 'http://www.dhl.com';
    const DHL_XSI = 'http://www.w3.org/2001/XMLSchema-instance';

    /**
     * Class constructor
     */ 
    public function __construct()
    {
        $this->_params = array_merge($this->_headerParams, $this->_bodyParams);
        $this->initializeValues();
    }

    /**
     * Generates the XML to be sent to DHL
     * 
     * @return string
     */
    public function toXML()
    {
        $this->validateParameters();

        $xmlWriter = new \XMLWriter();
        $xmlWriter->openMemory();
        $xmlWriter->setIndent(true);
        $xmlWriter->startDocument('1.0', 'UTF-8');
            
        $xmlWriter->startElement('req:' . $this->_serviceName);
        $xmlWriter->writeAttribute('xmlns:req', self::DHL_REQ);
        $xmlWriter->writeAttribute('xmlns:xsi', self::DHL_XSI);
        $xmlWriter->writeAttribute('xsi:schemaLocation', self::DHL_REQ . ' ' .$this->_serviceXSD);
    
        if ($this->_displaySchemaVersion) 
        {
            $xmlWriter->writeAttribute('schemaVersion', '1.0');
        }

        $xmlWriter->startElement('Request');
        $xmlWriter->startElement('ServiceHeader');
        foreach ($this->_headerParams as $name => $infos) 
        {
            $xmlWriter->writeElement($name, $this->$name);
        }
        $xmlWriter->endElement(); // End of Request
        $xmlWriter->endElement(); // End of ServiceHeader

        foreach ($this->_bodyParams as $name => $infos) 
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
        $xmlWriter->endDocument();
    
        return $xmlWriter->outputMemory(true);
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
    final private function initializeValues()
    {
        foreach ($this->_params as $name => $infos) 
        {
            if (!$this->_isSubobject && isset($infos['subobject']) && $infos['subobject'])
            {
                $tmp = get_class($this);
                $parts = explode('\\', $tmp);
                array_pop($parts);
                $className = implode('\\', $parts) . '\\' . $infos['type'];
                $className = str_replace('Entity', 'Datatype', $className);
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
            if (isset($infos['required']) && true === $infos['required'] && $this->_values[$name] === null)
            {
                throw new \InvalidArgumentException('Field ' . $name . ' has no value');
            }

            if ($this->_values[$name]) 
            {
                $this->validateParameterType($name, $this->_values[$name]);
                $this->validateParameterValue($name, $this->_values[$name]);
            }
        }

        if (null === $this->_serviceName)
        {
            throw new \InvalidArgumentException('Class ' . get_class($this) . ' must have a valid serviceName property defined');
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
               // throw new \InvalidArgumentException('Field ' . $key . ' has an invalid type definition : ' . $this->_params[$key]['type']);
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
        if (isset($this->_params[$key]['acceptedValues']))
        {
            $acceptedValues = explode(',', $this->_params[$key]['acceptedValues']);
            if (!in_array($value, $acceptedValues)) 
            {
                throw new \InvalidArgumentException('Field ' . $key . ' cannot be set to value : ' . $value . '. Accepted values are : ' . $this->_params[$key]['acceptedValues']);
            }
        }
        if (isset($this->_params[$key]['size']))
        {
            if (strlen($value) < $this->_params[$key]['size'])
            {
                throw new \InvalidArgumentException('Field ' . $key . ' has a size of ' . strlen($value) . ' and it should be that size : ' . $this->_params[$key]['size']);
            }
        }

        return true;
    }
}
