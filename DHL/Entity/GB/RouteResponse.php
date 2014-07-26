<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * RouteResponse Request model for DHL API
 */
class RouteResponse extends Base
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
    protected $_serviceName = 'RouteResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RouteResponse.xsd';

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
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
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
        'ServiceArea' => array(
            'type' => 'ServiceArea',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
