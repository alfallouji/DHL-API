<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * PieceEvent Request model for DHL API
 */
class PieceEvent extends Base
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
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
