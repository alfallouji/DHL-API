<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * ServiceEvent Request model for DHL API
 */
class ServiceEvent extends Base
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
        'EventCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Description' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
