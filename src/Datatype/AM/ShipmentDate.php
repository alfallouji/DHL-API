<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ShipmentDate Request model for DHL API
 */
class ShipmentDate extends Base
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
        'ShipmentDateFrom' => [
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
        ],
        'ShipmentDateTo' => [
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
        ],
    ];
}
