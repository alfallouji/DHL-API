<?php

namespace Mtc\Dhl\Entity\GB;

use Mtc\Dhl\Entity\Base;

/**
 * Class ModifyPUResponse
 *
 * @package Mtc\Dhl
 */
class ModifyPUResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $is_sub_object = false;

    /**
     * Name of the service
     * @var string
     */
    protected $service_name = 'ModifyPUResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ModifyPUResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = [
        'Response' => [
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ],
        'RegionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ],
        'Note' => [
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ],
        'ConfirmationNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ],
        'ReadyByTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'SecondReadyByTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'NextPickupDate' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'PickupCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'CurrencyCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'CallInTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'SecondCallInTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'OriginSvcArea' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minLength' => '3',
            'maxLength' => '3',
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
    ];
}
