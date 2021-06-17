<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ExportLineItem Request model for DHL API
 */
class ExportLineItem extends Base
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
        'LineNumber' => [
            'type' => 'LineNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minInclusive' => '1',
            'maxInclusive' => '200',
        ],
        'Quantity' => [
            'type' => 'Quantity',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity',
            'maxInclusive' => '32000',
        ],
        'QuantityUnit' => [
            'type' => 'QuantityUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity unit of measure (tens, hundreds, thousands, etc.)',
            'maxLength' => '8',
        ],
        'Description' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Value' => [
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ],
        'IsDomestic' => [
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ],
        'CommodityCode' => [
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ],
        'ScheduleB' => [
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ],
        'ECCN' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Weight' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'License' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'LicenseSymbol' => [
            'type' => 'LicenseNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export license number',
            'maxLength' => '16',
        ],
    ];
}
