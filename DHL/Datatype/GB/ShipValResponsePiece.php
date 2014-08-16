<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        ShipValResponsePiece.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ShipValResponsePiece Request model for DHL API
 */
class ShipValResponsePiece extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object 
     * @var string
     */
    protected $_xmlNodeName = 'Piece';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'PieceNumber' => array(
            'type' => 'PieceNumber',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece Number',
        ), 
        'Depth' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
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
        'PieceContents' => array(
            'type' => 'PieceContents',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece contents description',
            'maxLength' => '35',
        ), 
        'DataIdentifier' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ), 
        'LicensePlate' => array(
            'type' => 'PieceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece ID',
            'maxLength' => '35',
        ), 
        'LicensePlateBarCode' => array(
            'type' => 'BarCode',
            'required' => true,
            'subobject' => false,
            'comment' => '',
        ), 
    );
}
