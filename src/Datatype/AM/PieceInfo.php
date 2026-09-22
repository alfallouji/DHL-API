<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * PieceInfo Request model for DHL API
 */
class PieceInfo extends Base
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
        'PieceDetails' => [
            'type' => 'PieceDetails',
            'required' => true,
            'subobject' => true,
        ],
        'PieceEvent' => [
            'type' => 'PieceEvent',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
