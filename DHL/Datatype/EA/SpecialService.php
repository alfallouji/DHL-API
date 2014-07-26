<?php
namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 * SpecialService Request model for DHL API
 */
class SpecialService extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'SpecialServiceType' => array(
            'type' => 'SpecialServiceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Special Service codes',
            'maxLength' => '3',
        ), 
        'CommunicationAddress' => array(
            'type' => 'CommunicationAddress',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line number: phone number, fax number',
            'maxLength' => '50',
        ), 
        'CommunicationType' => array(
            'type' => 'CommunicationType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Communications line type (P: phone, F: fax)',
            'length' => '1',
            'enumeration' => 'P,F',
        ), 
        'ChargeValue' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ), 
        'CurrencyCode' => array(
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ), 
        'IsWaived' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
    );
}
