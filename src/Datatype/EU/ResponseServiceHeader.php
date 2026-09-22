<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

/**
 * Class ResponseServiceHeader
 *
 * @package Mtc\Dhl
 */
class ResponseServiceHeader extends Base
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
        'MessageTime' => [
            'type' => 'dateTime',
            'required' => false,
            'subobject' => false,
        ],
        'MessageReference' => [
            'type' => 'MessageReference',
            'required' => false,
            'subobject' => false,
            'comment' => 'Reference to the requested Message',
            'minLength' => '28',
            'maxLength' => '32',
        ],
        'SiteID' => [
            'type' => 'SiteID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Site ID used for verifying the sender',
            'minLength' => '6',
            'maxLength' => '20',
        ],
    ];
}
