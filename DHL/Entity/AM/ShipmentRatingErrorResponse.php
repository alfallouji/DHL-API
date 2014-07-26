<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * ShipmentRatingErrorResponse Request model for DHL API
 */
class ShipmentRatingErrorResponse extends Base
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
    protected $_serviceName = 'ShipmentRatingErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentRatingErrorResponse.xsd';

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
