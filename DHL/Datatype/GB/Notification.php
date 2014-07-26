<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Notification Request model for DHL API
 */
class Notification extends Base
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
        'EmailAddress' => array(
            'type' => 'Message',
            'required' => false,
            'subobject' => false,
            'comment' => 'Message',
            'maxLength' => '250',
        ), 
        'Message' => array(
            'type' => 'Message',
            'required' => false,
            'subobject' => false,
            'comment' => 'Message',
            'maxLength' => '250',
        ), 
    );
}
