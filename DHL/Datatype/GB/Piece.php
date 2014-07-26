<?php
namespace DHL\Datatype\GB; 
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
            'comment' => 'Package Type (EE: DHL Express Envelope, OD:Other
				DHL Packaging, CP:Customer-provided, JB-Jumbo box, JJ-Junior jumbo
				Box, DF-DHL Flyer, YP-Your packaging)',
            'length' => '2',
            'enumeration' => 'BD,BP,CP,DC,DF,DM,ED,EE,FR,JB,JD,JJ,JP,OD,PA,YP',
        ), 
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
        'DimWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999.999',
            'totalDigits' => '10',
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
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece contents description',
            'maxLength' => '35',
        ), 
    );
}
