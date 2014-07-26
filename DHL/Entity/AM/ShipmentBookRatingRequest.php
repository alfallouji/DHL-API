<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * ShipmentBookRatingRequest Request model for DHL API
 */
class ShipmentBookRatingRequest extends Base
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
    protected $_serviceName = 'ShipmentBookRatingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentBookRatingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
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
