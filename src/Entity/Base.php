<?php

namespace Mtc\Dhl\Entity;

use InvalidArgumentException;
use Mtc\Dhl\Datatype\Base as BaseDataType;

/**
 * Class Base
 *
 * @package Mtc\Dhl
 */
abstract class Base extends BaseDataType
{
    /**
     * Property values bag
     * @var array
     */
    protected $values = [];

    /**
     * Properties definitions
     * @var array
     */
    protected $params = [];

    /**
     * Parameters to be used in the header
     * @var array
     */
    protected $header_params = [
        'MessageTime' => [
            'type' => 'date-iso8601',
            'required' => true,
        ],
        'MessageReference' => [
            'type' => 'string',
            'required' => true,
            'size' => 28,
        ],
        'SiteID' => [
            'type' => 'string',
            'required' => true,
        ],
        'Password' => [
            'type' => 'string',
            'required' => true,
        ],
    ];

    /**
     * Parameters to be used in the header
     * @var array
     */
    protected $header_meta_params = [];

    /**
     * Parameters to be used in the body
     *
     * @var array
     */
    protected $body_params = [];

    /**
     * Name of the service
     *
     * @var string
     */
    protected $service_name;

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd;

    /**
     * Is object a subobject or not
     *
     * @var boolean
     */
    protected $is_sub_object;

    /**
     * @var string
     * The schema version
     */
    protected $schema_version = '1.0';

    /**
     * @var boolean
     * Render the schema version or not
     */
    protected $display_schema_version = false;

    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_model_name;

    /**
     * Class constants
     */
    public const DHL_REQ = 'http://www.dhl.com';
    public const DHL_XSI = 'http://www.w3.org/2001/XMLSchema-instance';

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->params = array_merge($this->header_params, $this->header_meta_params, $this->body_params);
        $this->initializeValues();
    }

    /**
     * Generates the XML to be sent to DHL
     *
     * @param \XMLWriter $xml_writer XMl Writer instance
     *
     * @return string
     */
    public function toXML(\XMLWriter $xml_writer = null)
    {
        $this->validateParameters();

        $xml_writer = new \XMLWriter();
        $xml_writer->openMemory();
        $xml_writer->setIndent(true);
        $xml_writer->startDocument('1.0', 'UTF-8');

        $xml_writer->startElement('req:' . $this->service_name);
        $xml_writer->writeAttribute('xmlns:req', self::DHL_REQ);
        $xml_writer->writeAttribute('xmlns:xsi', self::DHL_XSI);
        $xml_writer->writeAttribute('xsi:schemaLocation', self::DHL_REQ . ' ' . $this->service_xsd);

        if ($this->display_schema_version) {
            $xml_writer->writeAttribute('schemaVersion', $this->schema_version);
        }

        if (null !== $this->xml_model_name) {
            $xml_writer->startElement($this->xml_model_name);
        }

        $xml_writer->startElement('Request');
        $xml_writer->startElement('ServiceHeader');
        foreach ($this->header_params as $name => $infos) {
            $xml_writer->writeElement($name, $this->$name);
        }
        $xml_writer->endElement(); // End of ServiceHeader

        if (!empty($this->header_meta_params)) {
            $xml_writer->startElement('MetaData');
            foreach ($this->header_meta_params as $name => $infos) {
                $xml_writer->writeElement($name, $this->$name);
            }
            $xml_writer->endElement(); // End of MetaData
        }
        $xml_writer->endElement(); // End of Request

        foreach ($this->body_params as $name => $infos) {
            if ($this->$name) {
                if (is_object($this->$name)) {
                    $this->$name->toXML($xml_writer);
                } elseif (is_array($this->$name)) {
                    if ('string' === $this->params[$name]['type']) {
                        foreach ($this->$name as $sub_element) {
                            $xml_writer->writeElement($name, $sub_element);
                        }
                    } else {
                        if (
                            !isset($this->params[$name]['disableParentNode'])
                            || false == $this->params[$name]['disableParentNode']
                        ) {
                            $xml_writer->startElement($name);
                        }

                        foreach ($this->$name as $sub_element) {
                            $sub_element->toXML($xml_writer);
                        }

                        if (
                            !isset($this->params[$name]['disableParentNode'])
                            || false == $this->params[$name]['disableParentNode']
                        ) {
                            $xml_writer->endElement();
                        }
                    }
                } else {
                    $xml_writer->writeElement($name, $this->$name);
                }
            }
        }

        $xml_writer->endElement(); // End of parent node

        // End of class name tag
        if (null !== $this->xml_model_name) {
            $xml_writer->endElement();
        }

        $xml_writer->endDocument();

        return $xml_writer->outputMemory();
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

        if ((string)$xml->Response->Status->Condition->ConditionCode != '') {
            $errorMsg = ((string)$xml->Response->Status->Condition->ConditionCode) . ' : '
                . ((string)$xml->Response->Status->Condition->ConditionData);
            throw new \Exception('Error returned from DHL webservice : ' . $errorMsg);
        }

        $parts = explode('\\', get_class($this));
        $class_name = array_pop($parts);
        foreach ($xml->children() as $child) {
            $child_name = $child->getName();
            switch ($child_name) {
                case 'Response':
                    $this->MessageTime = (string)$child->ServiceHeader->MessageTime;
                    $this->MessageReference = (string)$child->ServiceHeader->MessageReference;
                    $this->SiteID = (string)$child->ServiceHeader->SiteID;
                    $this->Password = '#';
                    break;

                default:
                    if (is_object($this->$child_name)) {
                        $this->$child_name->initFromXml($child->asXML());
                    } elseif (
                        isset($this->params[$child_name]['multivalues'])
                        && $this->params[$child_name]['multivalues']
                    ) {
                        foreach ($child->children() as $sub_child) {
                            $sub_child_name = $sub_child->getName();
                            if ($sub_child->count() > 1) {
                                $sub_child_name .= 's';
                            }

                            $child_class_name = implode('\\', $parts) . '\\' . $this->params[$sub_child_name]['type'];
                            $child_class_name = str_replace('Entity', 'Datatype', $child_class_name);

                            if ('string' === $this->params[$sub_child_name]['type'] && ($sub_child->count() <= 1)) {
                                $childObj = trim((string)$sub_child);
                            } else {
                                $childObj = new $child_class_name();
                                $childObj->initFromXml($sub_child->asXML());
                            }

                            $addMethodName = 'add' . ucfirst($sub_child_name);
                            $this->$addMethodName($childObj);
                        }
                    } elseif (isset($this->$child_name)) {
                        $this->$child_name = trim((string)$child);
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
    protected function initializeValues(): void
    {
        foreach ($this->params as $name => $infos) {
            if (!$this->is_sub_object && isset($infos['subobject']) && $infos['subobject']) {
                if (isset($infos['multivalues']) && $infos['multivalues']) {
                    $this->values[$name] = [];
                } else {
                    $tmp = get_class($this);
                    $parts = explode('\\', $tmp);
                    array_pop($parts);
                    $class_name = implode('\\', $parts) . '\\' . $infos['type'];
                    $class_name = str_replace('Entity', 'Datatype', $class_name);
                    if (!class_exists($class_name)) {
                        $class_name = str_replace(['\\GB\\', '\\AP\\', '\\EA\\'], '\\AM\\', $class_name);
                    }
                    $this->values[$name] = new $class_name();
                }
            } else {
                $this->values[$name] = null;
            }
        }
    }

    /**
     * Validate all parameters
     *
     * @return boolean True upon success
     * @throws InvalidArgumentException Throws exception if type not valid or if value are missing
     */
    protected function validateParameters(): bool
    {
        foreach ($this->params as $name => $infos) {
            if (isset($infos['required']) && true === $infos['required'] && $this->values[$name] === null) {
                throw new InvalidArgumentException('Field ' . $name . ' has no value');
            }

            if ($this->values[$name]) {
                if (is_array($this->values[$name])) {
                    foreach ($this->values[$name] as $sub_element) {
                        $sub_element->validateParameters();
                    }
                } else {
                    $this->validateParameterType($name, $this->values[$name]);
                    $this->validateParameterValue($name, $this->values[$name]);
                }
            }
        }

        if (null === $this->service_name) {
            throw new InvalidArgumentException(
                'Class ' . get_class($this)
                . ' must have a valid serviceName property defined'
            );
        }

        return true;
    }
}
