<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class DestinationServiceArea
 *
 * @package Mtc\Dhl
 */
class DestinationServiceArea extends \Mtc\Dhl\Datatype\AM\DestinationServiceArea
{
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
            'maxLength' => '4',
        ],
    ];
}
