<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentRatingResponse
 *
 * @package Mtc\Dhl
 */
class ShipmentRatingResponse extends Base
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
    protected $service_name = 'ShipmentRatingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentRatingResponse.xsd';

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
        'Note' => [
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ],
        'Rated' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ShippingCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ],
        'SaturdayDeliveryCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ProofOfDeliveryCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DutyPayCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'OnForwardCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'InsuranceCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'PackageCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ],
        'ChargeableWeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DimensionalWeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'OriginServiceArea' => [
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'DestinationServiceArea' => [
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'CurrencyCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'WeightUnit' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
        'Surcharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ZoneID' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
