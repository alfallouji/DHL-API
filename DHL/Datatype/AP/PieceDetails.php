<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * PieceDetails Request model for DHL API
 */
class PieceDetails extends Base
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
        'AWBNumber' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
        'LicensePlate' => array(
            'type' => 'TrackingPieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'minLength' => '1',
            'maxLength' => '35',
        ), 
        'PieceNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualDepth' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualWidth' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualHeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'ActualWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Depth' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Width' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Height' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'Weight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'PackageType' => array(
            'type' => 'PackageType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other DHL Packaging, CP:Customer-provided.Ground shipments must choose CP)',
            'length' => '2',
            'enumeration' => 'EE,OD,CP',
        ), 
        'DimWeight' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'WeightUnit' => array(
            'type' => 'string',
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
