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
 * File:        PieceFault.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * PieceFault Request model for DHL API
 */
class PieceFault extends Base
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
        'PieceID' => array(
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'minLength' => '20',
            'maxLength' => '35',
        ), 
        'ConditionCode' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
        'ConditionData' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
    );
}
