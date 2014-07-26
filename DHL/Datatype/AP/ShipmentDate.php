<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * ShipmentDate Request model for DHL API
 */
class ShipmentDate extends Base
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
        'ShipmentDateFrom' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
        ), 
        'ShipmentDateTo' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
        ), 
    );
}
