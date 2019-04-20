<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * PieceEvent Request model for DHL API
 */
class PieceEvent extends Base
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
        'Date' => [
            'type' => 'date',
            'required' => false,
            'subobject' => false,
        ],
        'Time' => [
            'type' => 'time',
            'required' => false,
            'subobject' => false,
        ],
        'ServiceEvent' => [
            'type' => 'ServiceEvent',
            'required' => false,
            'subobject' => true,
        ],
        'Signatory' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ServiceArea' => [
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
