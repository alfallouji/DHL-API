<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

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
    protected $_params = array(
        'From' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'To' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'cc' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'Subject' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ReplyTo' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
        ), 
        'Body' => array(
            'type' => 'EmailBody',
            'required' => false,
            'subobject' => false,
            'comment' => 'Body of an email message',
            'maxLength' => '255',
        ), 
    );
}
