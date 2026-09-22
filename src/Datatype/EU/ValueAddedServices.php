<?php

namespace Mtc\Dhl\Datatype\EU;

class ValueAddedServices extends \Mtc\Dhl\Datatype\AM\ValueAddedServices
{
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