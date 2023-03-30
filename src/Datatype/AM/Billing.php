<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Billing Request model for DHL API
 */
class Billing extends Base
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
        'ShipperAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'ShippingPaymentType' => [
            'type' => 'PaymentType',
            'required' => false,
            'subobject' => false,
            'comment' => 'payment type (S:Shipper,R:Recipient,T:Third Party,C:Credit Card)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ],
        'BillingAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'DutyPaymentType' => [
            'type' => 'DutyTaxPaymentType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Duty and tax charge payment type (S:Shipper, R:Recipient, T:Third Party/Other)',
            'length' => '1',
            'enumeration' => 'S,R,T',
        ],
        'DutyAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
    ];
}
