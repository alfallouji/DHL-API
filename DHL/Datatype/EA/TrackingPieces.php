<?php
namespace DHL\Datatype\EA; 
use DHL\Datatype\Base;

/**
 * TrackingPieces Request model for DHL API
 */
class TrackingPieces extends Base
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
        'PieceInfo' => array(
            'type' => 'PieceInfo',
            'required' => true,
            'subobject' => true,
        ), 
    );
}
