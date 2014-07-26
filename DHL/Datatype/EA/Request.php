<?php
namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 * Request Request model for DHL API
 */
class Request extends Base
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
            'type' => 'ServiceHeader',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
