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
 * File:        ShipmentResponse.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ShipmentResponse Request model for DHL API
 */
class ShipmentResponse extends Base
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
    protected $_serviceName = 'ShipmentResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentResponse.xsd';

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
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ), 
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ), 
        'AirwayBillNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DHLRoutingCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Routing Code Text',
        ), 
        'DHLRoutingDataId' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'BillingCode' => array(
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
        'CourierMessage' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DestinationServiceArea' => array(
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'OriginServiceArea' => array(
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
        'PackageCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'Rated' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShippingCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ), 
        'InsuredAmount' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
        ), 
        'ChargeableWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DimensionalWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PickupCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DaysAdvanceNotice' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ConversionRate' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'Pieces' => array(
            'type' => 'ShipValResponsePiece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ), 
        'Barcodes' => array(
            'type' => 'Barcodes',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
        ), 
        'Piece' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'multivalues' => false,
        ), 
        'Contents' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Reference' => array(
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'AccountNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ), 
        'CustomerID' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentDate' => array(
            'type' => 'ShipmentDate',
            'required' => false,
            'subobject' => true,
        ), 
        'GlobalProductCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'pattern' => '([A-Z0-9])*',
            'minLength' => '1',
            'maxLength' => '4',
        ), 
        'ProductContentCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ProductShortName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'InternalServiceCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Handling feature code returned by GLS',
        ), 
        'DeliveryDateCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DeliveryTimeCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
        'Billing' => array(
            'type' => 'Billing',
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
        'NewShipper' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PLTStatus' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PLTStatus',
            'length' => '1',
            'enumeration' => 'A,D,S',
        ), 
        'QtdSInAdCur' => array(
            'type' => 'QtdSInAdCur',
            'required' => false,
            'subobject' => true,
        ), 
        'LabelImage' => array(
            'type' => 'LabelImage',
            'required' => false,
            'subobject' => true,
        ), 
        'CustData' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'CustData',
            'minLength' => '1',
            'maxLength' => '100',
        ), 
    );
}
