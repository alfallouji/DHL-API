<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * ShipValResponsePieces Request model for DHL API
 */
class ShipValResponsePieces extends Base
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
        'Piece' => array(
            'type' => 'ShipValResponsePiece',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
