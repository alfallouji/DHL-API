<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class RoutingErrorResponse
 *
 * @package Mtc\Dhl
 */
class RoutingErrorResponse extends Base
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
    protected $service_name = 'RoutingErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'RoutingErrorResponse.xsd';

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
