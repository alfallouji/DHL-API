<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

class ValueAddedServices extends Base
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
        'ServiceCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Service Code. Usually WY for paperless invoicing',
        ],
    ];

}