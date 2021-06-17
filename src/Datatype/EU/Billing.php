<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class Billing
 *
 * @package Mtc\Dhl
 */
class Billing extends \Mtc\Dhl\Datatype\AM\Billing
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ShipperAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ],
        'ShippingPaymentType' => [
            'type' => 'ShipmentPaymentType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipment payment type (S:Shipper)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ],
        'BillingAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ],
        'DutyPaymentType' => [
            'type' => 'DutyTaxPaymentType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Duty and tax charge payment type (R:Recipient)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ],
        'DutyAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ],
    ];
}
