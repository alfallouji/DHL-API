<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Commodity Request model for DHL API
 */
class Commodity extends Base
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
        'CommodityCode' => [
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ],
        'CommodityName' => [
            'type' => 'CommodityName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity name for shipment content',
            'maxLength' => '35',
        ],
    ];
}
