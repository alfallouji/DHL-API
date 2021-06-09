<?php

namespace Mtc\Dhl\Datatype\EU;

class AWBInfo extends \Mtc\Dhl\Datatype\AM\AWBInfo
{

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'AWBNumber' => [
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ],
        'Status' => [
            'type' => 'Status',
            'required' => false,
            'subobject' => true,
        ],
        'ShipmentInfo' => [
            'type' => 'ShipmentInfo',
            'required' => false,
            'subobject' => true,
        ],
        'PieceInfo' => [
            'type' => 'PieceInfo',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
