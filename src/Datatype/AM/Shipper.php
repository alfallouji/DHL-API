<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Shipper Request model for DHL API
 */
class Shipper extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ShipperID' => [
            'type' => 'ShipperID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipper\'s ID',
            'maxLength' => '30',
        ],
        'CompanyName' => [
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'maxLength' => '35',
        ],
        'RegisteredAccount' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'AddressLine' => [
            'type' => 'AddressLine',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line',
            'maxLength' => '35',
        ],
        'City' => [
            'type' => 'City',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ],
        'Division' => [
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ],
        'DivisionCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'PostalCode' => [
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ],
        'OriginServiceAreaCode' => [
            'type' => 'OriginServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginServiceAreaCode',
            'maxLength' => '3',
        ],
        'OriginFacilityCode' => [
            'type' => 'OriginFacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginFacilityCode',
            'maxLength' => '3',
        ],
        'CountryCode' => [
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
        'CountryName' => [
            'type' => 'CountryName',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ],
        'FederalTaxId' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'StateTaxId' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Contact' => [
            'type' => 'Contact',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
