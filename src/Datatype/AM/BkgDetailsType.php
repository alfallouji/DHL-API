<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * BkgDetailsType Request model for DHL API
 */
class BkgDetailsType extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_node_name = 'BkgDetails';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'PaymentCountryCode' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
        'Date' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
        'ReadyTime' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ReadyTimeGMTOffset' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'DimensionUnit' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
        'WeightUnit' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
        'NumberOfPieces' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ShipmentWeight' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Volume' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'MaxPieceWeight' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'MaxPieceHeight' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'MaxPieceDepth' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'MaxPieceWidth' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Pieces' => [
            'type' => 'PieceType',
            'required' => false,
            'subobject' => false,
            'multivalues' => true,
        ],
        'PaymentAccountNumber' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'IsDutiable' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'NetworkTypeCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'QtdShp' => [
            'type' => 'QtdShpType',
            'required' => false,
            'subobject' => true,
        ],
        'CODAmount' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'CODCurrencyCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'CODAccountNumber' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'InsuredValue' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'InsuredCurrency' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
