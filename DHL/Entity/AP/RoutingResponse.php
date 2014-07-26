<?php
namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * RoutingResponse Request model for DHL API
 */
class RoutingResponse extends Base
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
    protected $_serviceName = 'RoutingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RoutingResponse.xsd';

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
        'GMTNegativeIndicator' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'GMTOffset' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EA,AM',
        ), 
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
