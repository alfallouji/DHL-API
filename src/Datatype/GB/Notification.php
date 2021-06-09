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
 * File:        Notification.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace Mtc\Dhl\Datatype\GB;
use Mtc\Dhl\Datatype\Base;

/**
 * Notification Request model for DHL API
 */
class Notification extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'EmailAddress' => [
            'type' => 'Message',
            'required' => false,
            'subobject' => false,
            'comment' => 'Message',
            'maxLength' => '250',
        ],
        'Message' => [
            'type' => 'Message',
            'required' => false,
            'subobject' => false,
            'comment' => 'Message',
            'maxLength' => '250',
        ],
    ];
}
