<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * ModifyPURequest Request model for DHL API
 */
class ModifyPURequest extends Base
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
    protected $_serviceName = 'ModifyPURequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'ModifyPURequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RegionCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ), 
        'ConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ), 
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
        'OriginSvcArea' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '5',
        ), 
    );
}
