<?php
namespace DHL\Datatype\AP; 
use DHL\Datatype\Base;

/**
 * LabelImage Request model for DHL API
 */
class LabelImage extends Base
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
        'OutputFormat' => array(
            'type' => 'OutputFormat',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutputFormat',
            'enumeration' => 'PDF,PL2,ZPL2,JPG,PNG,EPL2,EPLN,ZPLN',
        ), 
        'OutputImage' => array(
            'type' => 'OutputImage',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutputImage',
        ), 
        'OutputImageNPC' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
    );
}
