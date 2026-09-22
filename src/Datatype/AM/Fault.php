<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Fault Request model for DHL API
 */
class Fault extends Base
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
        'PieceFault' => [
            'type' => 'PieceFault',
            'required' => true,
            'subobject' => true,
        ],
    ];
}
