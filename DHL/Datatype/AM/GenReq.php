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
 * File:        GenReq.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\AM;
use DHL\Datatype\Base;

/**
 * GenReq Request model for DHL API
 */
class GenReq extends Base
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
        'OSINFO' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'It finds all valid product and service combinations.',
            'length' => '1',
            'enumeration' => 'Y,N',
        ),
        'NXTPU' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'If pickup isn’t possible on requested pickup day. It finds next possible pickup.',
            'length' => '1',
            'enumeration' => 'Y,N',
        ),
        'FCNTWTYCD' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'It specifies the facility network code.',
            'enumeration' => 'DD,TD,AL',
        ),
        'CUSTAGRIND' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Specifies customer agreement indicator for product and services.',
            'length' => '1',
            'enumeration' => 'Y,N',
        ),
        'VLDTRT_DD' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Specifies whether the validation is required on ready time against the pickup window start time on DDI product.',
            'length' => '1',
            'enumeration' => 'Y,N',
        ),
    );
}
