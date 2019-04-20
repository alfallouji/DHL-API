<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * OriginServiceArea Request model for DHL API
 */
class OriginServiceArea extends Base
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
        'OutboundSortCode' => [
            'type' => 'OutboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutBound Sort Code',
            'length' => '4',
        ],
    ];
}
