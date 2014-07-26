<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * CustomerLogo Request model for DHL API
 */
class CustomerLogo extends Base
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
        'LogoImage' => array(
            'type' => 'LogoImage',
            'required' => false,
            'subobject' => false,
            'comment' => 'LogoImage',
            'maxLength' => '1048576',
        ), 
        'LogoImageFormat' => array(
            'type' => 'LogoImageFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'LogoImage Format',
            'enumeration' => 'PNG,GIF,JPEG,JPG',
        ), 
    );
}
