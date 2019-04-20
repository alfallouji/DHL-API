<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Dutiable Request model for DHL API
 */
class Dutiable extends Base
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
        'DeclaredValue' => [
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ],
        'DeclaredCurrency' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'ScheduleB' => [
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ],
        'ExportLicense' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ShipperEIN' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ShipperIDType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ConsigneeIDType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ImportLicense' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ConsigneeEIN' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'TermsOfTrade' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
