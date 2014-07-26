<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * RoutingRequest Request model for DHL API
 */
class RoutingRequest extends Base
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
    protected $_serviceName = 'RoutingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'RoutingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'RequestType' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'length' => '1',
            'enumeration' => 'O,D',
        ), 
        'Address1' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Address2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Address3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PostalCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ), 
        'City' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
        'CountryName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ), 
        'OriginCountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
