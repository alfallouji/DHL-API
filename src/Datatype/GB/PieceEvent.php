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
 * File:        PieceEvent.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace Mtc\Dhl\Datatype\GB;
use Mtc\Dhl\Datatype\Base;

/**
 * PieceEvent Request model for DHL API
 */
class PieceEvent extends \Mtc\Dhl\Datatype\AM\PieceEvent
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
    protected $params = [
        'Date' => [
            'type' => 'date',
            'required' => false,
            'subobject' => false,
        ], 
        'Time' => [
            'type' => 'time',
            'required' => false,
            'subobject' => false,
        ], 
        'ServiceEvent' => [
            'type' => 'ServiceEvent',
            'required' => false,
            'subobject' => true,
        ], 
        'Signatory' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ], 
        'ServiceArea' => [
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ], 
    ];
}
