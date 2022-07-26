<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

/**
 * Class ExportLineItem
 *
 * @package Mtc\Dhl
 */
class OtherCharge extends Base
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'OtherChargeCaption' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'OtherChargeValue' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'OtherChargeType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ]
    ];
}
