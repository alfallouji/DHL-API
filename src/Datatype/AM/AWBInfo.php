<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * AWBInfo Request model for DHL API
 */
class AWBInfo extends Base
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
        'AWBNumber' => [
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
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
        'Pieces' => [
            'type' => 'TrackingPieces',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
