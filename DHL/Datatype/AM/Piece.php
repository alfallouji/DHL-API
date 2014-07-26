<?php
namespace DHL\Datatype\AM; 
use DHL\Datatype\Base;

/**
 * Piece Request model for DHL API
 */
class Piece extends Base
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
            'type' => 'PieceID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece ID',
            'maxLength' => '35',
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'DimWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ), 
        'Width' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'Height' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'Depth' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
        ), 
        'PieceContents' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
