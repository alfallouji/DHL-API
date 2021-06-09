<?php

namespace Mtc\Dhl\Datatype\GB;

use Mtc\Dhl\Datatype\Base;

/**
 * Class BarCode
 *
 * @package Mtc\Dhl
 */
class BarCode extends Base
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
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
    ];
}
