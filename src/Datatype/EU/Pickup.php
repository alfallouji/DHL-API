<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

/**
 * Class Shipment
 *
 * @package Mtc\Dhl
 */
class Pickup extends Base
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'PickupDate'  => [
            'type'      => 'string',
            'required'  => true,
            'subobject' => false,
            'comment'   => 'Date Y-m-d',
            'maxLength' => '10',
        ],
        'ReadyByTime' => [
            'type'      => 'string',
            'required'  => true,
            'subobject' => false,
            'comment'   => 'Time HH:MM',
            'maxLength' => '5',
        ],
        'CloseTime'   => [
            'type'      => 'string',
            'required'  => true,
            'maxLength' => '5',
            'comment'   => 'Time HH:MM',
            'subobject' => false,
        ],
    ];
}
