<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * ShipmentValidateErrorResponse Request model for DHL API
 */
class ShipmentValidateErrorResponse extends Base
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
    protected $_serviceName = 'ShipmentValidateErrorResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ShipmentValidateErrorResponse.xsd';

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
