<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Condition Request model for DHL API
 */
class Condition extends Base
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
        'ConditionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ConditionData' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
