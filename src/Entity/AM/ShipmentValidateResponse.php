<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentValidateResponse
 *
 * @package Mtc\Dhl
 */
class ShipmentValidateResponse extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $is_sub_object = false;

    /**
     * Name of the service
     * @var string
     */
    protected $service_name = 'ShipmentValidateResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentValidateResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'Response' => [
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ],
        'Note' => [
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ],
        'AirwayBillNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'BillingCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ChargeCardConfirmationNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'CurrencyCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'CourierMessage' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DHLRoutingCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Routing Code Text',
        ],
        'DHLRoutingDataId' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DestinationServiceArea' => [
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'OriginServiceArea' => [
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'ProductContentCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ProductShortName' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'InternalServiceCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Handling feature code returned by GLS',
        ],
        'DeliveryDateCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DeliveryTimeCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Pieces' => [
            'type' => 'Pieces',
            'required' => false,
            'subobject' => true,
        ],
        'PackageCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ],
        'Rated' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ShippingCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ],
        'ShippingChargeInUSD' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'InsuredAmount' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'WeightUnit' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'minLength' => '0',
            'maxLength' => '1',
        ],
        'ChargeableWeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DimensionalWeight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ReadyByTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'PickupCharge' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'CallInTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DaysAdvanceNotice' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ConversionRate' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
        'Barcodes' => [
            'type' => 'string',
            'required' => false,
            'subobject' => true,
        ],
        'Piece' => [
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
        ],
        'Contents' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Reference' => [
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ],
        'Consignee' => [
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ],
        'Shipper' => [
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ],
        'AccountNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'CustomerID' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ShipmentDate' => [
            'type' => 'ShipmentDate',
            'required' => false,
            'subobject' => true,
        ],
        'GlobalProductCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ],
        'SpecialService' => [
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ],
        'Billing' => [
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ],
        'Dutiable' => [
            'type' => 'Dutiable',
            'required' => false,
            'subobject' => true,
        ],
        'ExportDeclaration' => [
            'type' => 'ExportDeclaration',
            'required' => false,
            'subobject' => true,
        ],
        'NewShipper' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'SDeliveryDt' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '10',
        ],
        'EDeliveryDt' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '4',
        ],
        'LHPOrigCd' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '4',
        ],
        'LHPDestCd' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '4',
        ],
        'PLTStatus' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'PLTStatus',
            'length' => '1',
            'enumeration' => 'A,D,S',
        ],
        'QtdSInAdCur' => [
            'type' => 'QtdSInAdCur',
            'required' => false,
            'subobject' => true,
        ],
        'LabelImage' => [
            'type' => 'LabelImage',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
