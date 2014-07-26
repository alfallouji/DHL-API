<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * BookPickupRequest Request model for DHL API
 */
class BookPickupRequest extends Base
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
    protected $_serviceName = 'BookPickupRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'BookPickupRequestAP.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
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
