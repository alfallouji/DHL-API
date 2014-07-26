<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * ShipmentTrackingErrorResponse Request model for DHL API
 */
class ShipmentTrackingErrorResponse extends Base
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
    protected $_serviceName = 'ShipmentTrackingErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentTrackingErrorResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Response' => array(
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
