<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * EventRemarks Request model for DHL API
 */
class EventRemarks extends Base
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
        'FurtherDetails' => [
            'type' => 'FurtherDetails',
            'required' => false,
            'subobject' => false,
            'comment' => 'FurtherDetails',
        ],
        'NextSteps' => [
            'type' => 'NextSteps',
            'required' => false,
            'subobject' => false,
            'comment' => 'NextSteps',
        ],
    ];
}
