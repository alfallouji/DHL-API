<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ShipmentDetails Request model for DHL API
 */
class ShipmentDetails extends Base
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
        'NumberOfPieces' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Pieces' => array(
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ), 
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
            'enumeration' => 'K,L',
        ), 
        'GlobalProductCode' => array(
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'LocalProductCode' => array(
            'type' => 'LocalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
            'pattern' => '([A-Z0-9])*',
        ), 
        'Date' => array(
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
            'pattern' => '[0-9][0-9][0-9][0-9](-)[0-9][0-9](-)[0-9][0-9]',
        ), 
        'Contents' => array(
            'type' => 'ShipmentContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipment contents description',
            'maxLength' => '90',
        ), 
        'DoorTo' => array(
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies
				to the shipment',
            'length' => '2',
            'enumeration' => 'DD,DA,AA,DC',
        ), 
        'DimensionUnit' => array(
            'type' => 'DimensionUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dimension Unit C (centimeter)',
            'length' => '1',
            'enumeration' => 'C,I',
        ), 
        'InsuredAmount' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other
				DHL Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
				Box, DF-DHL Flyer, YP-Your packaging)',
            'length' => '2',
            'enumeration' => 'BD,BP,CP,DC,DF,DM,ED,EE,FR,JB,JD,JJ,JP,OD,PA,YP',
        ), 
        'IsDutiable' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'AdditionalProtection' => array(
            'type' => 'AdditionalProtection',
            'required' => false,
            'subobject' => true,
        ), 
        'DOSFlag' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CustData' => array(
            'type' => 'CustData',
            'required' => false,
            'subobject' => false,
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ), 
    );
}
