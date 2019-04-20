<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * DocImage Request model for DHL API
 */
class DocImage extends Base
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
        'Type' => [
            'type' => 'Type',
            'required' => false,
            'subobject' => false,
            'comment' => 'Image Type',
            'length' => '3',
            'enumeration' => 'HWB,INV,PNV,COO,NAF,CIN,DCL',
        ],
        'Image' => [
            'type' => 'Image',
            'required' => false,
            'subobject' => false,
            'comment' => 'Image',
        ],
        'ImageFormat' => [
            'type' => 'ImageFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'Image Format',
            'maxLength' => '5',
            'enumeration' => 'PDF,PNG,TIFF,GIF,JPEG',
        ],
    ];
}
