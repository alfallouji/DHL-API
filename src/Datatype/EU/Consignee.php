<?php

namespace Mtc\Dhl\Datatype\EU;

class Consignee extends \Mtc\Dhl\Datatype\AM\Consignee
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'CompanyName' => [
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
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
        ],
        'Division' => [
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
        ],
        'DivisionCode' => [
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
        ],
        'PostalCode' => [
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
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
