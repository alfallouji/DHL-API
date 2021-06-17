<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * CustomerLogo Request model for DHL API
 */
class CustomerLogo extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'LogoImage' => [
            'type' => 'LogoImage',
            'required' => false,
            'subobject' => false,
            'comment' => 'LogoImage',
            'maxLength' => '1048576',
        ],
        'LogoImageFormat' => [
            'type' => 'LogoImageFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'LogoImage Format',
            'enumeration' => 'PNG,GIF,JPEG,JPG',
        ],
    ];
}
