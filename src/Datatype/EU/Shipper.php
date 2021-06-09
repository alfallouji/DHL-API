<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class Shipper
 *
 * @package Mtc\Dhl
 */
class Shipper extends \Mtc\Dhl\Datatype\AM\Shipper
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
            'minLength' => '0',
            'maxLength' => '35',
        ],
        'BusinessPartyTypeCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Possible Values:
                - BU (business)
                - DC (direct consumer)
                - GV (government)
                - OT (other)
                - PR (private)
                - RE (reseller)',
        ],
        'SuiteDepartmentName' => [
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
            'maxLength' => '35',
        ],
        'RegisteredAccount' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ],
        'RegistrationNumbers' => [
            'type' => 'RegistrationNumbers',
            'required' => false,
            'subobject' => false,
            'comment' => 'VAT Registration numbers',
            'maxLength' => '12',
        ],
        'AddressLine1' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line 1',
            'multivalues' => true,
        ],
        'AddressLine2' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line 2',
            'multivalues' => true,
        ],
        'AddressLine3' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line 3',
            'multivalues' => true,
        ],
        'StreetName' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Street Name',
            'multivalues' => true,
        ],
        'BuildingName' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Building Name',
            'multivalues' => true,
        ],
        'StreetNUmber' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Street Number',
            'multivalues' => true,
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
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
            'maxLength' => '35',
        ],
        'PostalCode' => [
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
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
