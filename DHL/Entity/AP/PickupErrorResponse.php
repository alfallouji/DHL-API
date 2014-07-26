<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * PickupErrorResponse Request model for DHL API
 */
class PickupErrorResponse extends Base
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
    protected $_serviceName = 'PickupErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'PickupErrorResponse.xsd';

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
