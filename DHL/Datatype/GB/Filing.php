<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Filing Request model for DHL API
 */
class Filing extends Base
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
        'FilingType' => array(
            'type' => 'FilingType',
            'required' => false,
            'subobject' => false,
            'comment' => 'FilingType',
            'minLength' => '3',
            'maxLength' => '4',
            'enumeration' => 'FTR,ITN,AES4',
        ), 
        'FTSR' => array(
            'type' => 'FTSR',
            'required' => false,
            'subobject' => false,
            'comment' => 'FTSR',
            'minLength' => '5',
            'maxLength' => '10',
            'enumeration' => '30.2(d)(2),30.36,30.37(a),30.37(b),30.37(e),30.37(f),30.37(g),30.37(h),30.37(j),30.37(k),30.39,30.40(a),30.40(b),30.40(c),30.40(d)',
        ), 
        'ITN' => array(
            'type' => 'ITN',
            'required' => false,
            'subobject' => false,
            'comment' => 'ITN',
            'length' => '15',
            'pattern' => 'X[0-9]{14}',
        ), 
        'AES4EIN' => array(
            'type' => 'AES4EIN',
            'required' => false,
            'subobject' => false,
            'comment' => 'AES4',
            'minLength' => '1',
            'maxLength' => '11',
        ), 
    );
}
