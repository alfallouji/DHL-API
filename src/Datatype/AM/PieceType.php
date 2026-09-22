<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * PieceType Request model for DHL API
 */
class PieceType extends Base
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
    protected $xml_node_name = 'Piece';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'PieceID' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
        'PackageTypeCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Height' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Depth' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Width' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'Weight' => [
            'type' => '',
            'required' => true,
            'subobject' => false,
        ],
    ];
}
