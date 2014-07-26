<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * EventRemarks Request model for DHL API
 */
class EventRemarks extends Base
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
        'FurtherDetails' => array(
            'type' => 'FurtherDetails',
            'required' => false,
            'subobject' => false,
            'comment' => 'FurtherDetails',
        ), 
        'NextSteps' => array(
            'type' => 'NextSteps',
            'required' => false,
            'subobject' => false,
            'comment' => 'NextSteps',
        ), 
    );
}
