<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * PickupResponse Request model for DHL API
 */
class PickupResponse extends Base
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
    protected $_serviceName = 'PickupResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'PickupResponse.xsd';

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
        'Note' => array(
            'type' => 'Note',
            'required' => false,
            'subobject' => true,
        ), 
        'ConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ), 
        'ReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'SecondReadyByTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'NextPickupDate' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PickupCharge' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'CurrencyCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'CallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'SecondCallInTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'OriginSvcArea' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minLength' => '3',
            'maxLength' => '3',
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
