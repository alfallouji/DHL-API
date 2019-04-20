<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ShipValResponsePieces Request model for DHL API
 */
class ShipValResponsePieces extends Base
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
        'Piece' => [
            'type' => 'ShipValResponsePiece',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
