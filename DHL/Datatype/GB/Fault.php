<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Fault Request model for DHL API
 */
class Fault extends Base
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
        'PieceFault' => array(
            'type' => 'PieceFault',
            'required' => true,
            'subobject' => true,
        ), 
    );
}
