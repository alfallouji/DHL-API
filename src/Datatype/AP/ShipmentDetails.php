<?php


namespace Mtc\Dhl\Datatype\AP;

/**
 * Class ShipmentDetails
 *
 * @package Mtc\Dhl
 */
class ShipmentDetails extends \Mtc\Dhl\Datatype\AM\ShipmentDetails
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'NumberOfPieces' => [
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ],
        'Pieces' => [
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ],
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
        'ProductCode' => [
            'type' => 'ProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL product code 
			D : US Overnight  (>0.5 lb) and Worldwide Express Non-dutiable  (>0.5 lb) 
			X : USA Express Envelope   (less than or  = 0.5 lb) and Worldwide Express-International Express Envelope  (less than or = 0.5 lb) 
			W : Worldwide Express-Dutiable
			Y : DHL Second Day Express . Must be Express Envelop with weight lessthan or = 0.5 lb
			G : DHL Second Day . Weight > 0.5 lb or not an express envelop
			T : DHL Ground Shipments',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ],
        'GlobalProductCode' => [
            'type' => 'ProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL product code 
			D : US Overnight  (>0.5 lb) and Worldwide Express Non-dutiable  (>0.5 lb) 
			X : USA Express Envelope   (less than or  = 0.5 lb) and Worldwide Express-International Express Envelope  (less than or = 0.5 lb) 
			W : Worldwide Express-Dutiable
			Y : DHL Second Day Express . Must be Express Envelop with weight lessthan or = 0.5 lb
			G : DHL Second Day . Weight > 0.5 lb or not an express envelop
			T : DHL Ground Shipments',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ],
        'LocalProductCode' => [
            'type' => 'LocalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ],
        'Date' => [
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
        ],
        'Contents' => [
            'type' => 'ShipmentContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipment contents description',
            'maxLength' => '90',
        ],
        'DoorTo' => [
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ],
        'DimensionUnit' => [
            'type' => 'DimensionUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dimension Unit I (inches)',
            'length' => '1',
            'enumeration' => 'C,I',
        ],
        'InsuredAmount' => [
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ],
        'PackageType' => [
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ],
        'IsDutiable' => [
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ],
        'CurrencyCode' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'CustData' => [
            'type' => 'CustData',
            'required' => false,
            'subobject' => false,
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ],
    ];
}
