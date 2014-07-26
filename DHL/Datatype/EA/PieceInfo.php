<?php
namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 * PieceInfo Request model for DHL API
 */
class PieceInfo extends Base
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
        'PieceDetails' => array(
            'type' => 'PieceDetails',
            'required' => true,
            'subobject' => true,
        ), 
        'PieceEvent' => array(
            'type' => 'PieceEvent',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
