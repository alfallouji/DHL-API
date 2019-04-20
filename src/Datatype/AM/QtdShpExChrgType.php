<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * QtdShpExChrgType Request model for DHL API
 */
class QtdShpExChrgType extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object
     * @var string
     */
    protected $xml_node_name = 'QtdShpExChrg';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'SpecialServiceType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'LocalSpecialServiceType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
