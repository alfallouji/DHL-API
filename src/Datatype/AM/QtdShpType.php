<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * QtdShpType Request model for DHL API
 */
class QtdShpType extends Base
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
    protected $xml_node_name = 'QtdShp';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'GlobalProductCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'LocalProductCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'QtdShpExChrg' => [
            'type' => 'QtdShpExChrgType',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
