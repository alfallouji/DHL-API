<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ServiceArea Request model for DHL API
 */
class ServiceArea extends Base
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
        'ServiceAreaCode' => [
            'type' => 'ServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL service area code',
            'length' => '3',
        ],
        'Description' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
