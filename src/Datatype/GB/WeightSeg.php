<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class WeightSeg
 *
 * @package Mtc\Dhl
 */
class WeightSeg extends \Mtc\Dhl\Datatype\AM\WeightSeg
{
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
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ],
        'WeightUnit' => [
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
            'enumeration' => 'K,L',
        ],
    ];
}
