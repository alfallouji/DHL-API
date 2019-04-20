<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class Place
 *
 * @package Mtc\Dhl
 */
class Place extends \Mtc\Dhl\Datatype\AM\Place
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ResidenceOrBusiness' => [
            'type' => 'ResidenceOrBusiness',
            'required' => false,
            'subobject' => false,
            'comment' => 'Identifies if a location is a business, residence,
				or both (B:Business, R:Residence, C:Business Residence)',
            'length' => '1',
            'enumeration' => 'B,R,C',
        ], 
        'CompanyName' => [
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ], 
        'AddressLine' => [
            'type' => 'AddressLine',
            'required' => true,
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
        'CountryCode' => [
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ], 
        'DivisionCode' => [
            'type' => 'StateCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (state) code.',
            'maxLength' => '35',
        ], 
        'Division' => [
            'type' => 'State',
            'required' => false,
            'subobject' => false,
            'comment' => 'State',
            'maxLength' => '35',
        ], 
        'PostalCode' => [
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ], 
        'PackageLocation' => [
            'type' => 'PackageLocation',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageLocation',
            'maxLength' => '40',
        ], 
    ];
}
