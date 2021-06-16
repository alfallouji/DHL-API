<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class ExportLineItem
 *
 * @package Mtc\Dhl
 */
class ExportLineItem extends \Mtc\Dhl\Datatype\AM\ExportLineItem
{
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
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Value' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
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
        'ImportCommodityCode' => [
            'type' => 'ImportCommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ],
        'ManufactureCountryCode' => [
            'type' => 'ManufactureCountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Country Code for manufacturing',
        ],
        'ScheduleB' => [
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ],
        'ECCN' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Weight' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'GrossWeight' => [
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
