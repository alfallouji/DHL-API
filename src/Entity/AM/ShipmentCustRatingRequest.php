<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentCustRatingRequest
 *
 * @package Mtc\Dhl
 */
class ShipmentCustRatingRequest extends Base
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
    protected $service_name = 'ShipmentCustRatingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentCustRatingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = [
        'Billing' => [
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ],
        'Shipper' => [
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ],
        'Consignee' => [
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ],
        'ShipmentDetails' => [
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ],
        'SpecialService' => [
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
