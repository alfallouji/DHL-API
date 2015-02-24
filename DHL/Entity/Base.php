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
use DHL\Datatype\Base as BaseDataType;

/**
 * Abstract class for each entity model used by DHL
 */
abstract class Base extends BaseDataType
{
    /**
     * Property values bag
     * @var array
     */
    protected $_values = array();

    /**
     * Properties definitions
     * @var array
     */
    protected $_params = array();

    /**
     * Parameters to be used in the header
     * @var array
     */
    protected $_headerParams = array(
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
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = null;

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
     * @param \XMLWriter $xmlWriter XMl Writer instance
     *   
     * @return string
     */
    public function toXML(\XMLWriter $xmlWriter = null)
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

        if (null !== $this->_xmlNodeName) 
        {
            $xmlWriter->startElement($this->_xmlNodeName);
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

        // End of class name tag
        if (null !== $this->_xmlNodeName) 
        {
            $xmlWriter->endElement();
        }

        $xmlWriter->endDocument();
    
        return $xmlWriter->outputMemory(true);
    }

    /**
     * Initialize object from an XML string
     * 
     * @param string $xml XML String
     * 
     * @return void
     * @throws \Exception Exception thrown if response returned has an error
     */
    public function initFromXML($xml) 
    {
        $xml = simplexml_load_string(str_replace('req:', '', $xml));

        if ((string) $xml->Response->Status->Condition->ConditionCode != '')
        {
            $errorMsg = ((string) $xml->Response->Status->Condition->ConditionCode) . ' : ' . ((string) $xml->Response->Status->Condition->ConditionData);
            throw new \Exception('Error returned from DHL webservice : ' . $errorMsg);
        }

        $parts = explode('\\', get_class($this));
        $className = array_pop($parts);
        foreach ($xml->children() as $child) 
        {           
            $childName = $child->getName();
            switch ($childName)
            {
                case 'Response':
                    $this->MessageTime = (string) $child->ServiceHeader->MessageTime;
                    $this->MessageReference = (string) $child->ServiceHeader->MessageReference;
                    $this->SiteID = (string) $child->ServiceHeader->SiteID;
                    $this->Password = '#';
                break;

                default:
                    if (is_object($this->$childName))
                    {
                        $this->$childName->initFromXml($child->asXML());
                    }
                    elseif (isset($this->_params[$childName]['multivalues']) && $this->_params[$childName]['multivalues'])
                    {
                        foreach ($child->children() as $subchild) 
                        {
                            $subchildName = $subchild->getName();
                            if ($subchild->count() > 1)
                            {
                                $subchildName .= 's';
                            }

                            $childClassname = implode('\\', $parts) . '\\' . $this->_params[$subchildName]['type'];
                            $childClassname = str_replace('Entity', 'Datatype', $childClassname);

                            if ('string' == $this->_params[$subchildName]['type'] && ($subchild->count() <= 1))
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
                    elseif (isset($this->$childName))
                    {
                        $this->$childName = trim((string) $child);
                    }
                break;
            }
        }
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
            if (!$this->_isSubobject && isset($infos['subobject']) && $infos['subobject'])
            {
                if (isset($infos['multivalues']) && $infos['multivalues']) 
                {
                    $this->_values[$name] = array();
                }
                else
                {
                    $tmp = get_class($this);
                    $parts = explode('\\', $tmp);
                    array_pop($parts);
                    $className = implode('\\', $parts) . '\\' . $infos['type'];
                    $className = str_replace('Entity', 'Datatype', $className);
                    $this->_values[$name] = new $className();
                }
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
                if (is_array($this->_values[$name])) 
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

        if (null === $this->_serviceName)
        {
            throw new \InvalidArgumentException('Class ' . get_class($this) . ' must have a valid serviceName property defined');
        }

        return true;
    }
}
