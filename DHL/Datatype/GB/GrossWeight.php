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
 * File:        GrossWeight.php
 * Project:     DHL API
 *
 * @author      Jorge
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;
/**
 * GrossWeight Request model for DHL API
 */
class GrossWeight extends Base
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
    protected $_params = [
        'Weight' => [
            'type'           => 'Weight',
            'required'       => false,
            'subobject'      => false,
            'comment'        => 'Weight of piece or shipment',
            'fractionDigits' => '3',
            'minInclusive'   => '0.000',
            'maxInclusive'   => '999999.999',
            'totalDigits'    => '10',
        ],
        'WeightUnit' => [
            'type'        => 'WeightUnit',
            'required'    => false,
            'subobject'   => false,
            'comment'     => 'Unit of weight measurement (K:KiloGram)',
            'minLength'   => '0',
            'maxLength'   => '1',
            'enumeration' => 'K,L',
        ],
    ];
}
