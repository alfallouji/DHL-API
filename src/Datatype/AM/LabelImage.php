<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * LabelImage Request model for DHL API
 */
class LabelImage extends Base
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
        'OutputFormat' => [
            'type' => 'OutputFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutputFormat',
            'enumeration' => 'PDF,PL2,ZPL2,JPG,PNG,EPL2,EPLN,ZPLN',
        ],
        'OutputImage' => [
            'type' => 'OutputImage',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutputImage',
        ],
        'OutputImageNPC' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
    ];
}
