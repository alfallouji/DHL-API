<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class ShipmentEvent
 *
 * @package Mtc\Dhl
 */
class ShipmentEvent extends \Mtc\Dhl\Datatype\AM\ShipmentEvent
{

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
