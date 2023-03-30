<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentValidateErrorResponse
 *
 * @package Mtc\Dhl
 */
class ShipmentValidateErrorResponse extends Base
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
    protected $service_name = 'ShipmentValidateErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentValidateErrorResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'Response' => [
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
