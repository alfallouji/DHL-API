<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class RoutingRequest
 *
 * @package Mtc\Dhl
 */
class RoutingRequest extends Base
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
    protected $service_name = 'RoutingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'RoutingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'RequestType' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'length' => '1',
            'enumeration' => 'O,D',
        ],
        'Address1' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Address2' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Address3' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'PostalCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ],
        'City' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ],
        'Division' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
        'CountryName' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ],
        'OriginCountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
