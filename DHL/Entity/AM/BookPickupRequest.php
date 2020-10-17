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
 * File:        BookPickupRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\AM;
use DHL\Entity\Base;

/**
 * BookPickupRequest Request model for DHL API
 */
class BookPickupRequest extends Base
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
    protected $_serviceName = 'BookPURequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'pickup-global-req.xsd';

    /**
     * @var string
     * The schema version
     */
    protected $_schemaVersion = '3.0';

    /**
     * Display the schema version
     * @var boolean
     */
    protected $_displaySchemaVersion = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'Requestor' => array(
            'type' => 'Requestor',
            'required' => true,
            'subobject' => true,
        ),
        'Place' => array(
            'type' => 'PickupPlace',
            'required' => true,
            'subobject' => true,
        ),
        'Pickup' => array(
            'type' => 'Pickup',
            'required' => true,
            'subobject' => true,
        ),
        'PickupContact' => array(
            'type' => 'PickupContact',
            'required' => true,
            'subobject' => true,
        ),
        'ShipmentDetails' => array( // TODO: check datatype class parameters
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ),
        'ConsigneeDetails' => array( // TODO: make datatype class
            'type' => 'ConsigneeDetails',
            'required' => false,
            'subobject' => false,
        ),
    );
}
