<?php
namespace DHL\Datatype\AM; 
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
