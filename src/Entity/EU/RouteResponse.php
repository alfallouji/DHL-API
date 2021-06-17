<?php

namespace Mtc\Dhl\Entity\EU;

use Mtc\Dhl\Entity\Base;

/**
 * Class RouteResponse
 *
 * @package Mtc\Dhl
 */
class RouteResponse extends Base
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
    protected $service_name = 'RouteResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'RouteResponse.xsd';

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
        'RegionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ],
        'GMTNegativeIndicator' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'GMTOffset' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ServiceArea' => [
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
