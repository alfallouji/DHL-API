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
 * File:        PickupPlace.php
 * Project:     DHL API
 *
 * @author      Mutahhar
 * @version     0.1
 */

namespace DHL\Datatype\AM;
use DHL\Datatype\Base;

/**
 * PickupPlace Request model for DHL API
 */
class PickupPlace extends Base
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
    protected $_xmlNodeName = 'Place';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'LocationType' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Identifies if a location is a business, residence, or both (B:Business, R:Residence, C:Business Residence)',
            'length' => '1',
            'enumeration' => 'B,R,C',
        ),
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => true,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'maxLength' => '45',
        ),
        'Address1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
            'maxLength' => '45',
        ),
        'Address2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line',
            'maxLength' => '45',
        ),
        'Address3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line',
            'maxLength' => '45',
        ),
        'PackageLocation' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
            'maxLength' => '45',
        ),
        'City' => array(
            'type' => 'City',
            'required' => true,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '45',
        ),
        'StateCode' => array(
            'type' => 'StateCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'State',
            'maxLength' => '45',
        ),
        'DivisionName' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'State',
            'maxLength' => '45',
        ),
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ),
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ),
        'RouteCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ),
        'Suburb' => array(
            'type' => 'Suburb',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
        ),
    );
}
