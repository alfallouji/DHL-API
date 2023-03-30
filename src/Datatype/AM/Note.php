<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Note Request model for DHL API
 */
class Note extends Base
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
        'ActionNote' => [
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
