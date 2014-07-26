<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * BarCodes Request model for DHL API
 */
class BarCodes extends Base
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
        'BarCode' => array(
            'type' => 'BarCode',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ), 
    );
}
