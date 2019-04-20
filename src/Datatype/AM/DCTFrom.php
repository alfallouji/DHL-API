<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * DCTFrom Request model for DHL API
 */
class DCTFrom extends Base
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
    protected $xml_node_name = 'From';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'CountryCode' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
        'Postalcode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'City' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Suburb' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'VatNo' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
