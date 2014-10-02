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
 * File:        BkgDetailsType.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * BkgDetailsType Request model for DHL API
 */
class BkgDetailsType extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = 'BkgDetails';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'PaymentCountryCode' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'Date' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'ReadyTime' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ReadyTimeGMTOffset' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'DimensionUnit' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => '',
            'required' => true,
            'subobject' => false,
        ), 
        'NumberOfPieces' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentWeight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Volume' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceWeight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceHeight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceDepth' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'MaxPieceWidth' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Pieces' => array(
            'type' => 'PieceType',
            'required' => false,
            'subobject' => false,
            'multivalues' => true,
        ), 
        'PaymentAccountNumber' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'IsDutiable' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'NetworkTypeCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'QtdShp' => array(
            'type' => 'QtdShpType',
            'required' => false,
            'subobject' => true,
        ), 
        'CODAmount' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'CODCurrencyCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'CODAccountNumber' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuredValue' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'InsuredCurrency' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
