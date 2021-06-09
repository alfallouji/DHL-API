<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class QtdSInAdCur
 *
 * @package Mtc\Dhl
 */
class QtdSInAdCur extends \Mtc\Dhl\Datatype\AM\QtdSInAdCur
{

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
            'enumeration' => 'BILLC,BILLCU,PULCL,INVCU,BASEC',
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
