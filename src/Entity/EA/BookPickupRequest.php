<?php

namespace Mtc\Dhl\Entity\EA;

use Mtc\Dhl\Entity\Base;

/**
 * Class BookPickupRequest
 *
 * @package Mtc\Dhl
 */
class BookPickupRequest extends Base
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
    protected $service_name = 'BookPickupRequestEA';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'BookPickupRequestEA.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'Requestor' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Place' => [
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ],
        'Pickup' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'PickupContact' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ShipmentDetails' => [
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
