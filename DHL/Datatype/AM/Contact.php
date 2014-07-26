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
 * File:        Contact.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * Contact Request model for DHL API
 */
class Contact extends Base
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
        'PersonName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'PhoneNumber' => array(
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
        ), 
        'PhoneExtension' => array(
            'type' => 'PhoneExtension',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '5',
        ), 
        'FaxNumber' => array(
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
        ), 
        'Telex' => array(
            'type' => 'Telex',
            'required' => false,
            'subobject' => false,
            'comment' => 'Telex number and answer back code',
            'maxLength' => '25',
        ), 
        'Email' => array(
            'type' => 'Email',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
