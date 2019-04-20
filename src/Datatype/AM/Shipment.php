<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

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
    protected $params = [
        'Weight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ],
        'WeightUnit' => [
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ],
        'Pieces' => [
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ],
        'DoorTo' => [
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ],
        'AirwarBillNumber' => [
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
        ],
        'AccountType' => [
            'type' => 'AccountType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account Type by method of payment ( DHL account vs. Credit card)',
            'enumeration' => 'D',
        ],
        'ProductType' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'GlobalProductType' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'LocalProductType' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Commodity' => [
            'type' => 'Commodity',
            'required' => false,
            'subobject' => true,
        ],
        'DeclaredValue' => [
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ],
        'DeclaredCurrency' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'InsuredValue' => [
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ],
        'InsuredCurrency' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'DimensionalUnit' => [
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ],
        'DimensionalWeight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ],
    ];
}
