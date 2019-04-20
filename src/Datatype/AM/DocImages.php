<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * DocImages Request model for DHL API
 */
class DocImages extends Base
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
        'DocImage' => [
            'type' => 'DocImage',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
