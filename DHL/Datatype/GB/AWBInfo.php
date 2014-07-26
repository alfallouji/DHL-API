<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * AWBInfo Request model for DHL API
 */
class AWBInfo extends Base
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
        'AWBNumber' => array(
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ), 
        'Status' => array(
            'type' => 'Status',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentInfo' => array(
            'type' => 'ShipmentInfo',
            'required' => false,
            'subobject' => true,
        ), 
        'PieceInfo' => array(
            'type' => 'PieceInfo',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
