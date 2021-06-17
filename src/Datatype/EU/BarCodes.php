<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class BarCodes
 *
 * @package Mtc\Dhl
 */
class BarCodes extends \Mtc\Dhl\Datatype\AM\BarCodes
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'AWBBarCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
        'OriginDestnBarcode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
        'ClientIDBarCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
        'DHLRoutingBarCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
    ];
}
