<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * BarCodes Request model for DHL API
 */
class BarCodes extends Base
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
        'BarCode' => [
            'type' => 'BarCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
    ];
}
