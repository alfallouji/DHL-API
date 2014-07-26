<?php
namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * UnknownTrackingRequest Request model for DHL API
 */
class UnknownTrackingRequest extends Base
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
    protected $_serviceName = 'UnknownTrackingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'UnknownTrackingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ), 
        'AccountNumber' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ), 
        'ShipperReference' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ShipmentDate' => array(
            'type' => 'ShipmentDate',
            'required' => false,
            'subobject' => true,
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
    );
}
