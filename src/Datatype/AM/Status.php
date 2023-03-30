<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Status Request model for DHL API
 */
class Status extends Base
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
        'ActionStatus' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Condition' => [
            'type' => 'Condition',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
