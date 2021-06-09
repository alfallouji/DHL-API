<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class Pieces
 *
 * @package Mtc\Dhl
 */
class Pieces extends \Mtc\Dhl\Datatype\AM\Pieces
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'Piece' => [
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ],
    ];
}
