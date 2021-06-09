<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * QtdSInAdCur Request model for DHL API
 */
class QtdSInAdCur extends Base
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
        'CurrencyCode' => [
            'type' => 'CurrencyCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'CurrencyRoleTypeCode' => [
            'type' => 'CurrencyRoleTypeCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'CurrencyRoleTypeCode',
            'maxLength' => '6',
            'enumeration' => 'BILLCU,PULCL,INVCU,BASEC',
        ],
        'PackageCharge' => [
            'type' => 'PackageCharge',
            'required' => true,
            'subobject' => false,
            'comment' => 'PackageCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ],
        'ShippingCharge' => [
            'type' => 'ShippingCharge',
            'required' => true,
            'subobject' => false,
            'comment' => 'ShippingCharge',
            'fractionDigits' => '3',
            'totalDigits' => '18',
        ],
    ];
}
