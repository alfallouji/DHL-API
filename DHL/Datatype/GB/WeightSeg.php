<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * WeightSeg Request model for DHL API
 */
class WeightSeg extends Base
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
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
        ), 
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)',
            'minLength' => '0',
            'maxLength' => '1',
            'enumeration' => 'K,L',
        ), 
    );
}
