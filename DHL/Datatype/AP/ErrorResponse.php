<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * ErrorResponse Request model for DHL API
 */
class ErrorResponse extends Base
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
        'ServiceHeader' => array(
            'type' => 'ServiceHeader',
            'required' => false,
            'subobject' => true,
        ), 
        'Status' => array(
            'type' => 'Status',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
