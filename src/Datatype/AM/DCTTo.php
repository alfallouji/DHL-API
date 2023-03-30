<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * DCTTo Request model for DHL API
 */
class DCTTo extends Base
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
    protected $xml_node_name = 'To';

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
