<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ShipValResponsePiece Request model for DHL API
 */
class ShipValResponsePiece extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'PieceNumber' => [
            'type' => 'PieceNumber',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece Number',
        ],
        'Depth' => [
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ],
        'Width' => [
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ],
        'Height' => [
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
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
        'PackageType' => [
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (
                EE: DHL Express Envelope, 
                OD:Other DHL Packaging, 
                CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ],
        'DimWeight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ],
        'PieceContents' => [
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece contents description',
            'maxLength' => '90',
        ],
        'DataIdentifier' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ],
        'LicensePlate' => [
            'type' => 'PieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'maxLength' => '35',
        ],
        'LicensePlateBarCode' => [
            'type' => 'BarCode',
            'required' => true,
            'subobject' => false,
            'comment' => '',
        ],
    ];
}
