<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * TrackingPieces Request model for DHL API
 */
class TrackingPieces extends Base
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
        'PieceInfo' => [
            'type' => 'PieceInfo',
            'required' => true,
            'subobject' => true,
        ],
    ];
}
