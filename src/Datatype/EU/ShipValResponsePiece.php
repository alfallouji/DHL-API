<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class ShipValResponsePiece
 *
 * @package Mtc\Dhl
 */
class ShipValResponsePiece extends \Mtc\Dhl\Datatype\AM\ShipValResponsePiece
{
    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_node_name = 'Piece';

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
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ],
        'PackageType' => [
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other
				DHL Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
				Box, DF-DHL Flyer, YP-Your packaging)',
            'length' => '2',
            'enumeration' => 'BD,BP,CP,DC,DF,DM,ED,EE,FR,JB,JD,JJ,JP,OD,PA,YP',
        ],
        'DimWeight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ],
        'PieceContents' => [
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece contents description',
            'maxLength' => '35',
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
