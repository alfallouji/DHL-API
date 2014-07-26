<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Response Request model for DHL API
 */
class Response extends Base
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
        'ServiceHeader' => array(
            'type' => 'ResponseServiceHeader',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
