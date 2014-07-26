<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * ShipmentCustRatingRequest Request model for DHL API
 */
class ShipmentCustRatingRequest extends Base
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
    protected $_serviceName = 'ShipmentCustRatingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentCustRatingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Billing' => array(
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ), 
        'Shipper' => array(
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ), 
        'Consignee' => array(
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ), 
        'ShipmentDetails' => array(
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ), 
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
