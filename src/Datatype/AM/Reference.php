<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Reference Request model for DHL API
 */
class Reference extends Base
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
        'ReferenceID' => [
            'type' => 'ReferenceID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipper reference ID',
            'maxLength' => '35',
        ],
        'ReferenceType' => [
            'type' => 'ReferenceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipment reference type',
            'length' => '2',
        ],
    ];
}
