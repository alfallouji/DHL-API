<?php

namespace Mtc\Dhl\Datatype\EU;

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
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ],
        'DestinationServiceArea' => [
            'type' => 'ServiceArea',
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
            'maxLength' => '12',
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
            'subobject' => true,
        ],
        'Pieces' => [
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
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
    ];
}
