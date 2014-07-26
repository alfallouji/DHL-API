<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * PieceFault Request model for DHL API
 */
class PieceFault extends Base
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
        'PieceID' => array(
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'minLength' => '1',
            'maxLength' => '35',
        ), 
        'ConditionCode' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
        'ConditionData' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
    );
}
