<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Customer Request model for DHL API
 */
class Customer extends Base
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
        'CustomerID' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Name' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
