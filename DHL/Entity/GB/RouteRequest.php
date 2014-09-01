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
 * File:        RouteRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * RouteRequest Request model for DHL API
 */
class RouteRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'RouteRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RouteRequest.xsd';

    /**
     * Display Schema version or not
     * @var boolean 
     */
    protected $_displaySchemaVersion = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ), 
        'RequestType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'length' => '1',
            'enumeration' => 'O,D',
        ), 
        'Address1' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Address2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Address3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PostalCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ), 
        'City' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'CountryName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ), 
        'OriginCountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
