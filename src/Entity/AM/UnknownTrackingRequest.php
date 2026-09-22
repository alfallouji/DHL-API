<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class UnknownTrackingRequest
 *
 * @package Mtc\Dhl
 */
class UnknownTrackingRequest extends Base
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
    protected $service_name = 'UnknownTrackingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'UnknownTrackingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'LanguageCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
        ],
        'AccountNumber' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'ShipperReference' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ShipmentDate' => [
            'type' => 'ShipmentDate',
            'required' => false,
            'subobject' => true,
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
    ];
}
