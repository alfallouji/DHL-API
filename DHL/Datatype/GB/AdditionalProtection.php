<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * AdditionalProtection Request model for DHL API
 */
class AdditionalProtection extends Base
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
        'Code' => array(
            'type' => 'Code',
            'required' => false,
            'subobject' => false,
            'comment' => 'Code',
            'length' => '2',
            'enumeration' => 'AP,NR',
        ), 
        'Value' => array(
            'type' => 'Value',
            'required' => false,
            'subobject' => false,
            'comment' => 'Value',
            'maxInclusive' => '9999999.99',
        ), 
    );
}
