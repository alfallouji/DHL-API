<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * DestinationServiceArea Request model for DHL API
 */
class DestinationServiceArea extends Base
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
        'FacilityCode' => array(
            'type' => 'FacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Destination Facility Code',
            'length' => '3',
        ), 
        'InboundSortCode' => array(
            'type' => 'InboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'InBound Sort Code',
            'length' => '4',
        ), 
    );
}
