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
 * File:        PickupResponse.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * PickupResponse Request model for DHL API
 */
class PickupResponse extends Base
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
    protected $_serviceName = 'PickupResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'PickupResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ), 
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ), 
        'ConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ), 
        'ReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'SecondReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'NextPickupDate' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PickupCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CurrencyCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'SecondCallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OriginSvcArea' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minLength' => '3',
            'maxLength' => '3',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
    );
}
