<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Place Request model for DHL API
 */
class Place extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'ResidenceOrBusiness' => array(
            'type' => 'ResidenceOrBusiness',
            'required' => false,
            'subobject' => false,
            'comment' => 'Identifies if a location is a business, residence,
				or both (B:Business, R:Residence, C:Business Residence)',
            'length' => '1',
            'enumeration' => 'B,R,C',
        ), 
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ), 
        'AddressLine' => array(
            'type' => 'AddressLine',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
            'maxLength' => '35',
        ), 
        'City' => array(
            'type' => 'City',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ), 
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'DivisionCode' => array(
            'type' => 'StateCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (state) code.',
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'State',
            'required' => false,
            'subobject' => false,
            'comment' => 'State',
            'maxLength' => '35',
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ), 
        'PackageLocation' => array(
            'type' => 'PackageLocation',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageLocation',
            'maxLength' => '40',
        ), 
    );
}
