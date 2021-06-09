<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class Shipment
 *
 * @package Mtc\Dhl
 */
class Shipment extends \Mtc\Dhl\Datatype\AM\Shipment
{
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
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ],
        'WeightUnit' => [
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
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
            'comment' => 'Defines the type of delivery service that applies
				to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ],
        'AirwarBillNumber' => [
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ],
        'AccountType' => [
            'type' => 'AccountType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account Type by method of payment ( DHL account
				vs. Credit card)',
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
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
            'enumeration' => 'K,L',
        ],
        'DimensionalWeight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ],
    ];
}
