<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * Email Request model for DHL API
 */
class Email extends Base
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
        'From' => [
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ],
        'To' => [
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ],
        'cc' => [
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ],
        'Subject' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'ReplyTo' => [
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ],
        'Body' => [
            'type' => 'EmailBody',
            'required' => false,
            'subobject' => false,
            'comment' => 'Body of an email message',
            'maxLength' => '255',
        ],
    ];
}
