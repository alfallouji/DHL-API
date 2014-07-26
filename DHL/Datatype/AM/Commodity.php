<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * Commodity Request model for DHL API
 */
class Commodity extends Base
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
        'CommodityCode' => array(
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ), 
        'CommodityName' => array(
            'type' => 'CommodityName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity name for shipment content',
            'maxLength' => '35',
        ), 
    );
}
