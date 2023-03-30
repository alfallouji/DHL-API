<?php

namespace Mtc\Dhl\Datatype\EA;

/**
 * Class ShipmentInfo
 *
 * @package Mtc\Dhl
 */
class ShipmentInfo extends \Mtc\Dhl\Datatype\AM\ShipmentInfo
{

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'OriginServiceArea' => [
            'type' => 'OriginServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'DestinationServiceArea' => [
            'type' => 'DestinationServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'ShipperName' => [
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ],
        'ShipperAccountNumber' => [
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxInclusive' => '9999999999',
            'minInclusive' => '100000000',
        ],
        'ConsigneeName' => [
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ],
        'ShipmentDate' => [
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ],
        'Pieces' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Weight' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'WeightUnit' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'EstDlvyDate' => [
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ],
        'EstDlvyDateUTC' => [
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ],
        'GlobalProductCode' => [
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minLength' => '1',
            'maxLength' => '4',
        ],
        'ShipmentDesc' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DlvyNotificationFlag' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Shipper' => [
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ],
        'Consignee' => [
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
