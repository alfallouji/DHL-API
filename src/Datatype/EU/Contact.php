<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class Contact
 *
 * @package Mtc\Dhl
 */
class Contact extends \Mtc\Dhl\Datatype\AM\Contact
{
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
            'maxLength' => '25',
        ],
        'Phone' => [
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
            'maxLength' => '25',
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
            'maxLength' => '25',
        ],
        'Telex' => [
            'type' => 'Telex',
            'required' => false,
            'subobject' => false,
            'comment' => 'Telex number and answer back code',
            'maxLength' => '25',
        ],
        'Email' => [
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
            'maxLength' => '50',
        ],
        'MobilePhoneNumber' => [
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Mobile Phone Number',
            'maxLength' => '25',
        ],
    ];
}
