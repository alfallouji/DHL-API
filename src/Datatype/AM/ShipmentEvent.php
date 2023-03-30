<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ShipmentEvent Request model for DHL API
 */
class ShipmentEvent extends Base
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
        'EventRemarks' => [
            'type' => 'EventRemarks',
            'required' => false,
            'subobject' => true,
        ],
        'ServiceArea' => [
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
