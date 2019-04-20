<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Contact Request model for DHL API
 */
class Contact extends Base
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
        'PersonName' => [
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ],
        'PhoneNumber' => [
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
        ],
        'PhoneExtension' => [
            'type' => 'PhoneExtension',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '5',
        ],
        'FaxNumber' => [
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
        ],
        'Telex' => [
            'type' => 'Telex',
            'required' => false,
            'subobject' => false,
            'comment' => 'Telex number and answer back code',
            'maxLength' => '25',
        ],
        'Email' => [
            'type' => 'Email',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
