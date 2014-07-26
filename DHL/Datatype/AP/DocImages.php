<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * DocImages Request model for DHL API
 */
class DocImages extends Base
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
        'DocImage' => array(
            'type' => 'DocImage',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
