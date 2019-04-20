<?php

namespace Mtc\Dhl\Datatype\GB;

use Mtc\Dhl\Datatype\Base;

/**
 * Class PUShipmentDetails
 *
 * @package Mtc\Dhl
 */
class PUShipmentDetails extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_node_name = 'ShipmentDetails';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'AccountType' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'AccountType',
            'minLength' => '1',
            'maxLength' => '6',
        ],
        'AccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'BillToAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'AWBNumber' => [
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
        ],
        'NumberOfPieces' => [
            'type' => 'integer',
            'required' => false,
            'subobject' => false,
        ],

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
        'GlobalProductCode' => [
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
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
        'DimensionUnit' => [
            'type' => 'DimensionUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dimension Unit C (centimeter)',
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

        'InsuredCurrencyCode' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'Pieces' => [
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ],
        'SpecialService' => [
            'disableParentNode' => true,
            'multivalues' => true,
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
