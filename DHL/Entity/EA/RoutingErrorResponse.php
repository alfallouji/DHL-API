<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * RoutingErrorResponse Request model for DHL API
 */
class RoutingErrorResponse extends Base
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
    protected $_serviceName = 'RoutingErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RoutingErrorResponse.xsd';

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
