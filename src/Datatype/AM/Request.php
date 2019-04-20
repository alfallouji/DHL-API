<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Request Request model for DHL API
 */
class Request extends Base
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
    ];
}
