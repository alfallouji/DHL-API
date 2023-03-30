<?php

namespace Mtc\Dhl\Entity\EU;

use Mtc\Dhl\Entity\Base;

/**
 * Class RouteRequest
 *
 * @package Mtc\Dhl
 */
class RouteRequest extends Base
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
    protected $service_name = 'RouteRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'routing-global-req-2.0.xsd';

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
            'maxLength' => '12',
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
