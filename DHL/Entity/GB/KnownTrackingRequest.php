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
 * File:        KnownTrackingRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\GB; 
use DHL\Entity\Base;

/**
 * KnownTrackingRequest Request model for DHL API
 */
class KnownTrackingRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'KnownTrackingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'KnownTrackingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ), 
        'AWBNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ), 
        'LPNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LevelOfDetails' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Checkpoint details selection flag',
            'enumeration' => 'LAST_CHECK_POINT_ONLY,ALL_CHECK_POINTS',
        ), 
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'S,B,P',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
    );
}
