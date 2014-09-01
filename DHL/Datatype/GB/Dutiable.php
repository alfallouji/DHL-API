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
 * File:        Dutiable.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Dutiable Request model for DHL API
 */
class Dutiable extends Base
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
        'DeclaredValue' => array(
            'type' => 'DeclaredValue',
            'required' => false,
            'subobject' => false,
            'comment' => 'DeclaredValue',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'DeclaredCurrency' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ExportLicense' => array(
            'type' => 'ExportLicense',
            'required' => false,
            'subobject' => false,
            'comment' => 'ExportLicense',
            'maxLength' => '16',
        ), 
        'ShipperEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipperIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ConsigneeIDType' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ImportLicense' => array(
            'type' => 'ImportLicense',
            'required' => false,
            'subobject' => false,
            'comment' => '\"ImportLicense\"',
            'maxLength' => '16',
        ), 
        'ConsigneeEIN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'TermsOfTrade' => array(
            'type' => 'TermsOfTrade',
            'required' => false,
            'subobject' => false,
            'comment' => '\"TermsOfTrade\"',
            'maxLength' => '3',
        ), 
        'CommerceLicensed' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'Filing' => array(
            'type' => 'Filing',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
