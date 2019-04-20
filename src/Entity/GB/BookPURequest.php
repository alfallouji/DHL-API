<?php

namespace Mtc\Dhl\Entity\GB;

use Mtc\Dhl\Entity\Base;

/**
 * Class BookPURequest
 *
 * @package Mtc\Dhl
 */
class BookPURequest extends Base
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
    protected $service_name = 'BookPURequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'BookPURequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = [
        'RegionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
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
        'ShipmentDetails' => [
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
