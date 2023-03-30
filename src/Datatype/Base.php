<?php

namespace Mtc\Dhl\Datatype;

/**
 * Class Base
 *
 * @package Mtc\Dhl
 */
abstract class Base
{
    /**
     * Properties definitions
     * @var array
     */
    protected $params = [];

    /**
     * Property values bag
     * @var array
     */
    protected $values = [];

    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_node_name = null;

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
        foreach ($this->values as $k => $v) {
            if (is_object($v)) {
                if (!$v->isEmpty()) {
                    return false;
                }
            } elseif (!empty($v) && $v !== null) {
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
        if ($this->isEmpty()) {
            return;
        }

        $displayedParentNode = false;
        $this->validateParameters();

        if (null !== $this->xml_node_name) {
            $parentNode = $this->xml_node_name;
        } else {
            $parts = explode('\\', get_class($this));
            $parentNode = array_pop($parts);
        }

        $xmlWriter->startElement($parentNode);

        foreach ($this->params as $name => $infos) {
            if ($this->$name) {
                if (is_object($this->$name)) {
                    $this->$name->toXML($xmlWriter);
                } elseif (is_array($this->$name)) {
                    if ('string' == $this->params[$name]['type']) {
                        foreach ($this->$name as $sub_element) {
                            $xmlWriter->writeElement($name, $sub_element);
                        }
                    } else {
                        if (
                            !isset($this->params[$name]['disableParentNode'])
                            || false == $this->params[$name]['disableParentNode']
                        ) {
                            $xmlWriter->startElement($name);
                        }

                        foreach ($this->$name as $sub_element) {
                            $sub_element->toXML($xmlWriter);
                        }

                        if (
                            !isset($this->params[$name]['disableParentNode'])
                            || false == $this->params[$name]['disableParentNode']
                        ) {
                            $xmlWriter->endElement();
                        }
                    }
                } else {
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
        foreach ($xml->children() as $child) {
            $childName = $child->getName();

            if (isset($this->$childName) && is_object($this->$childName)) {
                $this->$childName->initFromXml($child->asXML());
            } elseif (isset($this->params[$childName]['multivalues']) && $this->params[$childName]['multivalues']) {
                foreach ($child->children() as $sub_child) {
                    $sub_child_name = $sub_child->getName();
                    $child_class_name = implode('\\', $parts) . '\\' . $this->params[$sub_child_name]['type'];
                    $child_class_name = str_replace('Entity', 'Datatype', $child_class_name);
                    if ('string' == $this->params[$sub_child_name]['type']) {
                        $childObj = trim((string)$sub_child);
                    } else {
                        $childObj = new $child_class_name();
                        $childObj->initFromXml($sub_child->asXML());
                    }
                    $addMethodName = 'add' . ucfirst($sub_child_name);
                    $this->$addMethodName($childObj);
                }
            } elseif (isset($this->$childName) && ((string)$child)) {
                $this->$childName = trim((string)$child);
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

        if (
            isset($this->params[$key . 's'])
            && $this->params[$key . 's']['type'] !== 'string'
            && isset($this->params[$key . 's']['multivalues'])
            && true === $this->params[$key . 's']['multivalues']
        ) {
            $key .= 's';
        }

        if (!array_key_exists($key, $this->values)) {
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for ' . get_class($this));
        }

        if (empty($arguments) && count($arguments) > 1) {
            throw new \InvalidArgumentException($name . ' method takes only 1 argument');
        }

        $this->validateParameterType($key, $arguments[0]);
        $this->validateParameterValue($key, $arguments[0]);

        if (isset($this->params[$key]['multivalues']) && $this->params[$key]['multivalues']) {
            $this->values[$key][] = $arguments[0];
        } else {
            $message = 'This is not a multivalues field : ' . $key . ' called via method ' . $name;
            throw new \InvalidArgumentException($message);
        }
    }

    /**
     * Magic isset function
     *
     * @param string $key Key to check
     *
     * @return bool True if it exsits, false otherwise
     */
    final public function __isset($key)
    {
        return array_key_exists($key, $this->values);
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
        if (!array_key_exists($key, $this->values)) {
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for ' . get_class($this));
        }

        return $this->values[$key];
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
        if (!array_key_exists($key, $this->values)) {
            throw new \InvalidArgumentException('Field : ' . $key . ' is not defined for ' . get_class($this));
        }

        $this->validateParameterType($key, $value);
        $this->validateParameterValue($key, $value);
        $this->values[$key] = $value;
    }

    /**
     * Initialize property values bag
     *
     * @return void
     */
    protected function initializeValues()
    {
        foreach ($this->params as $name => $infos) {
            if (isset($infos['multivalues']) && $infos['multivalues']) {
                $this->values[$name] = [];
            } elseif (isset($infos['subobject']) && $infos['subobject']) {
                $tmp = get_class($this);
                $parts = explode('\\', $tmp);
                array_pop($parts);
                $className = implode('\\', $parts) . '\\' . $infos['type'];
                $this->values[$name] = new $className();
            } else {
                $this->values[$name] = null;
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
        foreach ($this->params as $name => $infos) {
            if ($this->values[$name]) {
                if (is_array($this->values[$name]) && isset($infos['subobject']) && true === $infos['subobject']) {
                    foreach ($this->values[$name] as $sub_element) {
                        $sub_element->validateParameters();
                    }
                } else {
                    $this->validateParameterType($name, $this->values[$name]);
                    $this->validateParameterValue($name, $this->values[$name]);
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
        if (null === $value) {
            return true;
        }

        switch ($this->params[$key]['type']) {
            case 'string':
                if (
                    is_array($value)
                    && isset($this->params[$key]['multivalues'])
                    && true === $this->params[$key]['multivalues']
                ) {
                    foreach ($value as $subvalue) {
                        if (null !== $subvalue && $subvalue !== (string)$subvalue) {
                            throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : '
                                . $this->params[$key]['type'] . ' but it has a value of : ' . $subvalue);
                        }
                    }
                } elseif ($value !== (string)$value) {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : '
                        . $this->params[$key]['type'] . ' but it has a value of : ' . $value);
                }
                break;

            case 'datetime':
            case 'date-iso8601':
                $timestamp = strtotime($value);
                $date = date(DATE_ISO8601, $timestamp);
                if (strtotime($date) !== strtotime($value)) {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : '
                        . $this->params[$key]['type'] . ' but it has a value of : ' . $value);
                }
                break;

            case 'positiveInteger':
            case 'negativeInteger':
            case 'integer':
                if (false === filter_var((int)$value, FILTER_VALIDATE_INT) && ((int)$value != $value)) {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : '
                        . $this->params[$key]['type'] . ' but it has a value of : ' . $value);
                }
                break;

            case 'decimal':
            case 'float':
            case 'double':
                if (false === filter_var((int)$value, FILTER_VALIDATE_FLOAT) && ((double)$value != $value)) {
                    throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : '
                        . $this->params[$key]['type'] . ' but it has a value of : ' . $value);
                }
                break;

            default:
                if (isset($this->params[$key]['subobject']) && $this->params[$key]['subobject']) {
                    $currentClass = get_class($value);
                    $parts = explode('\\', $currentClass);
                    array_pop($parts);
                    $className = implode('\\', $parts) . '\\' . $this->params[$key]['type'];
                    $className = str_replace('Entity', 'DataType', $className);
                    if (!$value instanceof $className) {
                        throw new \InvalidArgumentException('Invalid type for ' . $key . '. It should be of type : '
                            . $this->params[$key]['type'] . ' but it has a value of : "' . print_r($value, true) . '"');
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
        foreach ($this->params[$key] as $type => $typeValue) {
            switch ($type) {
                case 'enumeration':
                    $acceptedValues = explode(',', $typeValue);
                    if (!in_array($value, $acceptedValues)) {
                        $message = 'Field ' . $key . ' cannot be set to value : ' . $value
                            . '. Accepted values are : ' . $typeValue;
                        throw new \InvalidArgumentException($message);
                    }
                    break;

                case 'length':
                    if (strlen($value) != $typeValue) {
                        $message = 'Field ' . $key . ' has a size of ' . strlen($value)
                            . ' and it should be that size : ' . $typeValue;
                        throw new \InvalidArgumentException($message);
                    }
                    break;

                case 'maxLength':
                    if (strlen($value) > $typeValue) {
                        $message = 'Field ' . $key . ' has a size of ' . strlen($value)
                            . ' and it cannot exceed this size : ' . $typeValue;
                        throw new \InvalidArgumentException($message);
                    }
                    break;

                case 'minLength':
                    if (strlen($value) < $typeValue) {
                        $message = 'Field ' . $key . ' has a size of ' . strlen($value)
                            . ' and it cannot be less than this size : ' . $typeValue;
                        throw new \InvalidArgumentException($message);
                    }
                    break;

                case 'minInclusive':
                    if ($value < $typeValue) {
                        throw new \InvalidArgumentException('Field ' . $key . ' cannot be smaller than ' . $typeValue);
                    }
                    break;

                case 'maxInclusive':
                    if ($value > $typeValue) {
                        throw new \InvalidArgumentException('Field ' . $key . ' cannot be higher than ' . $typeValue);
                    }
                    break;

                case 'pattern':
                    $matches = [];
                    $typeValue = "/" . $typeValue . "/";
                    if (1 !== preg_match($typeValue, $value, $matches) || (strlen($value) > 0 && !$matches[0])) {
                        $message = 'Field ' . $key . ' should match regex pattern : ' . $typeValue
                            . ' and it has a value of ' . $value;
                        throw new \InvalidArgumentException($message);
                    }
                    break;
            }
        }

        return true;
    }
}
