<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class Consignee
 *
 * @package Mtc\Dhl\Datatype\GB
 */
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
        'SuiteDepartmentName' => [
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
        ],
        'AddressLine' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
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
