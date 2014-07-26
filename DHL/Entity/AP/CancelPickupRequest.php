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
 * File:        CancelPickupRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Entity\AP; 
use DHL\Entity\Base;

/**
 * CancelPickupRequest Request model for DHL API
 */
class CancelPickupRequest extends Base
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
    protected $_serviceName = 'CancelPickupRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'CancelPickupRequestAP.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'ConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ), 
        'RequestorName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'maxLength' => '2',
        ), 
        'OriginSvcArea' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '5',
        ), 
        'Reason' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '3',
            'minLength' => '3',
            'enumeration' => '001,002,003,004,005,006,007,008',
        ), 
    );
}
