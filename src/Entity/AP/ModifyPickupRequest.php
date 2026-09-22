<?php

namespace Mtc\Dhl\Entity\AP;

use Mtc\Dhl\Entity\Base;

/**
 * Class ModifyPickupRequest
 *
 * @package Mtc\Dhl
 */
class ModifyPickupRequest extends Base
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
    protected $service_name = 'ModifyPickupRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ModifyPickupRequestAP.xsd';

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
        'OriginSvcArea' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '5',
        ],
    ];
}
