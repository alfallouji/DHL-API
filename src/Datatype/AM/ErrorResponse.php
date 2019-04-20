<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ErrorResponse Request model for DHL API
 */
class ErrorResponse extends Base
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
        'ServiceHeader' => [
            'type' => 'ServiceHeader',
            'required' => false,
            'subobject' => true,
        ],
        'Status' => [
            'type' => 'Status',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
