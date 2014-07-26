<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Label Request model for DHL API
 */
class Label extends Base
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
        'LabelTemplate' => array(
            'type' => 'LabelTemplate',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelTemplate',
            'enumeration' => '8X4_A4_PDF,8X4_thermal,8X4_A4_TC_PDF,6X4_A4_PDF,6X4_thermal,8X4_CI_PDF,8X4_CI_thermal',
        ), 
        'Logo' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CustomerLogo' => array(
            'type' => 'CustomerLogo',
            'required' => false,
            'subobject' => true,
        ), 
        'Resolution' => array(
            'type' => 'Resolution',
            'required' => false,
            'subobject' => false,
            'comment' => 'Resolution',
            'minInclusive' => '200',
            'maxInclusive' => '300',
        ), 
    );
}
