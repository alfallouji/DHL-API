<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

/**
 * Class Shipment
 *
 * @package Mtc\Dhl
 */
class PickupContact extends Base
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'PersonName'     => [
            'type'      => 'PersonName',
            'required'  => true,
            'subobject' => false,
            'comment'   => 'Name',
            'maxLength' => '35',
        ],
        'Phone'          => [
            'type'      => 'PhoneNumber',
            'required'  => true,
            'subobject' => false,
            'comment'   => 'Phone Number',
            'maxLength' => '25',
        ],
        'PhoneExtension' => [
            'type'      => 'PhoneExtension',
            'required'  => false,
            'subobject' => false,
            'comment'   => '',
            'maxLength' => '5',
        ],
    ];
}
