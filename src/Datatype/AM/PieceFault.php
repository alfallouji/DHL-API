<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * PieceFault Request model for DHL API
 */
class PieceFault extends Base
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
        'PieceID' => [
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'minLength' => '1',
            'maxLength' => '35',
        ],
        'ConditionCode' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ],
        'ConditionData' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ],
    ];
}
