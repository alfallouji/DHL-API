<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * Pieces Request model for DHL API
 */
class Pieces extends Base
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
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
