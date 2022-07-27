<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

/**
 * Class ExportLineItem
 *
 * @package Mtc\Dhl
 */
class OtherCharge extends Base
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'OtherChargeCaption' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'OtherChargeValue' => [
            'type' => 'decimal',
            'required' => true,
            'subobject' => false,
        ],
        'OtherChargeType' => [
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'length' => '5',
            'enumeration' => 'ADMIN,DELIV,DOCUM,EXPED,EXCHA,FRCST,SSRGE,LOGST,SOTHR,SPKGN,PICUP,HRCRG,VATCR,INSCH,REVCH',
        ]
    ];
}
