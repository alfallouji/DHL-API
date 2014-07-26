<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * Customer Request model for DHL API
 */
class Customer extends Base
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
        'CustomerID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Name' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
