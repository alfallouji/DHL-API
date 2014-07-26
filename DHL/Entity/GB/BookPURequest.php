<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * BookPURequest Request model for DHL API
 */
class BookPURequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'BookPURequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'BookPURequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ), 
        'Requestor' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Place' => array(
            'type' => 'Place',
            'required' => false,
            'subobject' => true,
        ), 
        'Pickup' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PickupContact' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
