<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class CancelPickupRequest
 *
 * @package Mtc\Dhl
 */
class CancelPickupRequest extends Base
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
    protected $service_name = 'CancelPickupRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'CancelPickupRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
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
        'OriginSvcArea' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '5',
        ],
        'Reason' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '3',
            'minLength' => '3',
            'enumeration' => '001,002,003,004,005,006,007,008',
        ],
    ];
}
