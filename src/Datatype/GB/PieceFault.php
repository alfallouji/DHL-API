<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class PieceFault
 *
 * @package Mtc\Dhl
 */
class PieceFault extends \Mtc\Dhl\Datatype\AM\PieceFault
{

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
            'minLength' => '20',
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
