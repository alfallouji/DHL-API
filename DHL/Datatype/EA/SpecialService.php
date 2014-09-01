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
 * File:        SpecialService.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 * SpecialService Request model for DHL API
 */
class SpecialService extends Base
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
        'SpecialServiceType' => array(
            'type' => 'SpecialServiceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Special Service codes',
            'maxLength' => '3',
        ), 
        'CommunicationAddress' => array(
            'type' => 'CommunicationAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line number: phone number, fax number',
            'maxLength' => '50',
        ), 
        'CommunicationType' => array(
            'type' => 'CommunicationType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line type (P: phone, F: fax)',
            'length' => '1',
            'enumeration' => 'P,F',
        ), 
        'ChargeValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'IsWaived' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
    );
}
