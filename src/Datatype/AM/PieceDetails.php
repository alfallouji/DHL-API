<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * PieceDetails Request model for DHL API
 */
class PieceDetails extends Base
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
        'AWBNumber' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ],
        'LicensePlate' => [
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'minLength' => '1',
            'maxLength' => '35',
        ],
        'PieceNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ActualDepth' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ActualWidth' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ActualHeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ActualWeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Depth' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Width' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Height' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Weight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'PackageType' => [
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ],
        'DimWeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'WeightUnit' => [
            'type' => 'string',
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
