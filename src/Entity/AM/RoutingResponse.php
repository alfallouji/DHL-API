<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class RoutingResponse
 *
 * @package Mtc\Dhl
 */
class RoutingResponse extends Base
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
    protected $service_name = 'RoutingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'RoutingResponse.xsd';

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
        'RegionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EA,AM',
        ],
        'ServiceArea' => [
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
