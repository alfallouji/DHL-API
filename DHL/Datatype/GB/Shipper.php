<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Shipper Request model for DHL API
 */
class Shipper extends Base
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
        'ShipperID' => array(
            'type' => 'ShipperID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipper\'s ID',
            'maxLength' => '30',
        ), 
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ), 
        'SuiteDepartmentName' => array(
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
            'maxLength' => '35',
        ), 
        'RegisteredAccount' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
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
        'Division' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ), 
        'DivisionCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
            'maxLength' => '35',
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ), 
        'OriginServiceAreaCode' => array(
            'type' => 'OriginServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginServiceAreaCode',
            'maxLength' => '3',
        ), 
        'OriginFacilityCode' => array(
            'type' => 'OriginFacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginFacilityCode',
            'maxLength' => '3',
        ), 
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'CountryName' => array(
            'type' => 'CountryName',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ), 
        'FederalTaxId' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'StateTaxId' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Contact' => array(
            'type' => 'Contact',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
