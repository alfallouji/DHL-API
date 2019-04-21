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
    protected $service_xsd = 'book-pickup-global-req_EA.xsd';

    /**
     * Display Schema version or not
     * @var boolean
     */
    protected $display_schema_version = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
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
            'type' => 'Requestor',
            'required' => false,
            'subobject' => true,
        ],
        'Place' => [
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ],
        'Pickup' => [
            'type' => 'Pickup',
            'required' => false,
            'subobject' => true,
        ],
        'PickupContact' => [
            'type' => 'PickupContact',
            'required' => false,
            'subobject' => true,
        ],
        'ShipmentDetails' => [
            'type' => 'PUShipmentDetails',
            'required' => false,
            'subobject' => true,
        ],
        'ConsigneeDetails' => [
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,

        ]
    ];
}
