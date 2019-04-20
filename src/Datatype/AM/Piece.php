<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Piece Request model for DHL API
 */
class Piece extends Base
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
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
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
        'DimWeight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
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
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
