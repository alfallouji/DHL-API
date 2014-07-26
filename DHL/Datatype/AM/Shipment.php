<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * Shipment Request model for DHL API
 */
class Shipment extends Base
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
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'Pieces' => array(
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ), 
        'DoorTo' => array(
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ), 
        'AirwarBillNumber' => array(
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
        ), 
        'AccountType' => array(
            'type' => 'AccountType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account Type by method of payment ( DHL account vs. Credit card)',
            'enumeration' => 'D',
        ), 
        'ProductType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'GlobalProductType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LocalProductType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Commodity' => array(
            'type' => 'Commodity',
            'required' => false,
            'subobject' => true,
        ), 
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
        'InsuredValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'InsuredCurrency' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'DimensionalUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ), 
        'DimensionalWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
    );
}
