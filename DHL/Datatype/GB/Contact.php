<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

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
    protected $_params = array(
        'PersonName' => array(
            'type' => 'PersonName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name',
            'maxLength' => '35',
        ), 
        'PhoneNumber' => array(
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
            'maxLength' => '25',
        ), 
        'PhoneExtension' => array(
            'type' => 'PhoneExtension',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '5',
        ), 
        'FaxNumber' => array(
            'type' => 'PhoneNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Phone Number',
            'maxLength' => '25',
        ), 
        'Telex' => array(
            'type' => 'Telex',
            'required' => false,
            'subobject' => false,
            'comment' => 'Telex number and answer back code',
            'maxLength' => '25',
        ), 
        'Email' => array(
            'type' => 'EmailAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Email address containing \'@\'',
            'maxLength' => '50',
        ), 
    );
}
