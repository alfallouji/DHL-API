<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentTrackingErrorResponse
 *
 * @package Mtc\Dhl
 */
class ShipmentTrackingErrorResponse extends Base
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
    protected $service_name = 'ShipmentTrackingErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentTrackingErrorResponse.xsd';

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
    ];
}
