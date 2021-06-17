<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * WeightSeg Request model for DHL API
 */
class WeightSeg extends Base
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
        'Weight' => [
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ],
        'WeightUnit' => [
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (L:Pounds)',
            'length' => '1',
            'enumeration' => 'K,L',
        ],
    ];
}
