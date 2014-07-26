<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Note Request model for DHL API
 */
class Note extends Base
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
        'ActionNote' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Condition' => array(
            'type' => 'Condition',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
