<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * Dutiable Request model for DHL API
 */
class Dutiable extends Base
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
        'DeclaredValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'DeclaredCurrency' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ExportLicense' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipperEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipperIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ConsigneeIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ImportLicense' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ConsigneeEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'TermsOfTrade' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
