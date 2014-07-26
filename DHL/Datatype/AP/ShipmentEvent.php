<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * ShipmentEvent Request model for DHL API
 */
class ShipmentEvent extends Base
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
        'Date' => array(
            'type' => 'date',
            'required' => false,
            'subobject' => false,
        ), 
        'Time' => array(
            'type' => 'time',
            'required' => false,
            'subobject' => false,
        ), 
        'ServiceEvent' => array(
            'type' => 'ServiceEvent',
            'required' => false,
            'subobject' => true,
        ), 
        'Signatory' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'EventRemarks' => array(
            'type' => 'EventRemarks',
            'required' => false,
            'subobject' => true,
        ), 
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
