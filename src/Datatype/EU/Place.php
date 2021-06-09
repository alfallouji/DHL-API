<?php

namespace Mtc\Dhl\Datatype\EU;

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
        'LocationType'        => [
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'B - business R - residence  C - Business-residence',
            'maxLength' => '35',
        ],
        'ResidenceOrBusiness' => [
            'type'        => 'ResidenceOrBusiness',
            'required'    => false,
            'subobject'   => false,
            'comment'     => 'Identifies if a location is a business, residence,
				or both (B:Business, R:Residence, C:Business Residence)',
            'length'      => '1',
            'enumeration' => 'B,R,C',
        ],
        'CompanyName'         => [
            'type'      => 'CompanyNameValidator',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ],
        'Address1'            => [
            'type'        => 'string',
            'required'    => true,
            'subobject'   => false,
            'comment'     => 'Address Line',
            'multivalues' => false,
        ],
        'Address2'            => [
            'type'        => 'string',
            'required'    => false,
            'subobject'   => false,
            'comment'     => 'Address Line',
            'multivalues' => false,
        ],
        'PackageLocation'     => [
            'type'      => 'PackageLocation',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'PackageLocation',
            'maxLength' => '40',
        ],
        'City'                => [
            'type'      => 'City',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'City name',
            'maxLength' => '35',
        ],
        'StateCode'           => [
            'type'      => 'StateCode',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'State Code',
            'maxLength' => '35',
        ],
        'DivisionName'        => [
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'DivisionName',
            'maxLength' => '35',
        ],
        'CountryCode'         => [
            'type'      => 'CountryCode',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'ISO country codes',
            'length'    => '2',
        ],
        'PostalCode'          => [
            'type'      => 'PostalCode',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'Full postal/zip code for address',
            'maxLength' => '12',
        ],

        'RouteCode'    => [
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'RouteCode',
            'maxLength' => '35',
        ],
        'Suburb'       => [
            'type'      => 'string',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'Suburb',
            'maxLength' => '35',
        ],
        'DivisionCode' => [
            'type'      => 'StateCode',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'Division (state) code.',
            'maxLength' => '35',
        ],
        'Division' => [
            'type'      => 'State',
            'required'  => false,
            'subobject' => false,
            'comment'   => 'State',
            'maxLength' => '35',
        ],
    ];
}
