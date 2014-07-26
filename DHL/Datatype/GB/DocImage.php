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
 * File:        DocImage.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * DocImage Request model for DHL API
 */
class DocImage extends Base
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
        'Type' => array(
            'type' => 'Type',
            'required' => false,
            'subobject' => false,
            'comment' => 'Image Type',
            'length' => '3',
            'enumeration' => 'HWB,INV,PNV,COO,NAF,CIN,DCL',
        ), 
        'Image' => array(
            'type' => 'Image',
            'required' => false,
            'subobject' => false,
            'comment' => 'Image',
        ), 
        'ImageFormat' => array(
            'type' => 'ImageFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'Image Format',
            'maxLength' => '5',
            'enumeration' => 'PDF,PNG,TIFF,GIF,JPEG',
        ), 
    );
}
