<?php

namespace Mtc\Dhl\Entity\GB;

use Mtc\Dhl\Entity\Base;

/**
 * Class CancelPURequest
 *
 * @package Mtc\Dhl
 */
class CancelPURequest extends Base
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
    protected $service_name = 'CancelPURequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'cancel-pickup-global-req-3.0';

    /**
     * Display Schema version or not
     * @var boolean
     */
    protected $display_schema_version = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'RegionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ],
        'ConfirmationNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ],
        'RequestorName' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
        'OriginSvcArea' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minLength' => '3',
            'maxLength' => '3',
        ],
        'Reason' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '3',
            'minLength' => '3',
            'enumeration' => '001,002,003,004,005,006,007,008',
        ],
        'PickupDate' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'CancelTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
