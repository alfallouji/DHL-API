<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class Piece
 *
 * @package Mtc\Dhl
 */
class Piece extends \Mtc\Dhl\Datatype\AM\Piece
{

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'PieceID' => [
            'type' => 'PieceID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece ID',
            'maxLength' => '35',
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
        'Depth' => [
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ], 
        'PieceContents' => [
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece contents description',
            'maxLength' => '35',
        ], 
    ];
}
