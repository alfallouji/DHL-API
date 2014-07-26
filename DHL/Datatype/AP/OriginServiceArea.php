<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * OriginServiceArea Request model for DHL API
 */
class OriginServiceArea extends Base
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
        'ServiceAreaCode' => array(
            'type' => 'ServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL service area code',
            'length' => '3',
        ), 
        'Description' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OutboundSortCode' => array(
            'type' => 'OutboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutBound Sort Code',
            'length' => '4',
        ), 
    );
}
