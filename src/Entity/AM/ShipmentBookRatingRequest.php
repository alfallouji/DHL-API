<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentBookRatingRequest
 *
 * @package Mtc\Dhl
 */
class ShipmentBookRatingRequest extends Base
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
    protected $service_name = 'ShipmentBookRatingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentBookRatingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
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
