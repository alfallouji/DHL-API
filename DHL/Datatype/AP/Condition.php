<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * Condition Request model for DHL API
 */
class Condition extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'ConditionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ConditionData' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
