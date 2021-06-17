<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * DestinationServiceArea Request model for DHL API
 */
class DestinationServiceArea extends Base
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
        'FacilityCode' => [
            'type' => 'FacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Destination Facility Code',
            'length' => '3',
        ],
        'InboundSortCode' => [
            'type' => 'InboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'InBound Sort Code',
            'length' => '4',
        ],
    ];
}
