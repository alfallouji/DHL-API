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
 * File:        QtdSInAdCur.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 * QtdSInAdCur Request model for DHL API
 */
class QtdSInAdCur extends Base
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
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CurrencyRoleTypeCode' => array(
            'type' => 'CurrencyRoleTypeCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'CurrencyRoleTypeCode',
            'maxLength' => '6',
            'enumeration' => 'BILLCU,PULCL,INVCU,BASEC',
        ), 
        'PackageCharge' => array(
            'type' => 'PackageCharge',
            'required' => true,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'ShippingCharge' => array(
            'type' => 'ShippingCharge',
            'required' => true,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
    );
}
