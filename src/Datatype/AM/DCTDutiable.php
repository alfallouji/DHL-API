<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * DCTDutiable Request model for DHL API
 */
class DCTDutiable extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_node_name = 'Dutiable';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'DeclaredCurrency' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'DeclaredValue' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
