<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        Consignee.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * Consignee Request model for DHL API
 */
class Consignee extends Base
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
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'maxLength' => '35',
        ), 
        'AddressLine' => array(
            'type' => 'AddressLine',
            'required' => false,
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
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
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
