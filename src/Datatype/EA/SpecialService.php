<?php

namespace Mtc\Dhl\Datatype\EA;

/**
 * Class SpecialService
 *
 * @package Mtc\Dhl
 */
class SpecialService extends \Mtc\Dhl\Datatype\AM\SpecialService
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'SpecialServiceType' => [
            'type' => 'SpecialServiceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Special Service codes',
            'maxLength' => '3',
        ],
        'CommunicationAddress' => [
            'type' => 'CommunicationAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line number: phone number, fax number',
            'maxLength' => '50',
        ],
        'CommunicationType' => [
            'type' => 'CommunicationType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line type (P: phone, F: fax)',
            'length' => '1',
            'enumeration' => 'P,F',
        ],
        'ChargeValue' => [
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ],
        'CurrencyCode' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ],
        'IsWaived' => [
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ],
    ];
}
