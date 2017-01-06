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
 * File:        ShipmentRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ShipmentRequest Request model for DHL API
 */
class ShipmentRequest extends Base
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
    protected $_serviceName = 'ShipmentRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentRequest.xsd';

    /**
     * @var string
     * The schema version
     */
    protected $_schemaVersion = '1.0';

    /**
     * Display the schema version
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
        'RequestedPickupTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ), 
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'Y,N',
        ), 
        'Billing' => array(
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'Commodity' => array(
            'type' => 'Commodity',
            'required' => false,
            'subobject' => true,
        ), 
        'Dutiable' => array(
            'type' => 'Dutiable',
            'required' => false,
            'subobject' => true,
        ), 
        'ExportDeclaration' => array(
            'type' => 'ExportDeclaration',
            'required' => false,
            'subobject' => true,
        ), 
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'SpecialService' => array(
            'disableParentNode' => true,
            'multivalues' => true,
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
        'Notification' => array(
            'type' => 'Notification',
            'required' => false,
            'subobject' => true,
        ), 
        'Place' => array(
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ), 
        'EProcShip' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Airwaybill' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DocImages' => array(
            'type' => 'DocImage',
            'multivalues' => true,
            'required' => false,
            'subobject' => true,
        ), 
        'LabelImageFormat' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelImageFormat',
            'minLength' => '3',
            'maxLength' => '4',
            'enumeration' => 'PDF,ZPL2,EPL2',
        ), 
        'RequestArchiveDoc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'NumberOfArchiveDoc' => array(
            'type' => 'integer',
            'required' => false,
            'subobject' => false,
        ),
        'Label' => array(
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
