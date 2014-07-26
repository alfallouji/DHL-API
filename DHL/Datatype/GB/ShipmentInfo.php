<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ShipmentInfo Request model for DHL API
 */
class ShipmentInfo extends Base
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
        'OriginServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipperName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'ShipperAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ), 
        'ConsigneeName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'ShipmentDate' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => true,
        ), 
        'Pieces' => array(
            'type' => '',
            'required' => false,
            'subobject' => true,
        ), 
        'Weight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'EstDlvyDate' => array(
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
