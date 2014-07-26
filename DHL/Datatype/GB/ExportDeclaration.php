<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ExportDeclaration Request model for DHL API
 */
class ExportDeclaration extends Base
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
        'InterConsignee' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'IsPartiesRelation' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'ECCN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'SignatureName' => array(
            'type' => 'SignatureName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature name',
            'maxLength' => '35',
        ), 
        'SignatureTitle' => array(
            'type' => 'SignatureTitle',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature title',
            'maxLength' => '35',
        ), 
        'ExportReason' => array(
            'type' => 'ExportReason',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason',
            'length' => '1',
        ), 
        'ExportReasonCode' => array(
            'type' => 'ExportReasonCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason code (P:Permanent, T:Temporary, R:Re-Export)',
            'length' => '1',
            'enumeration' => 'P,T,R',
        ), 
        'SedNumber' => array(
            'type' => 'SEDNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'enumeration' => 'FTSR,XTN,SAS,ITN',
        ), 
        'SedNumberType' => array(
            'type' => 'SEDNumberType',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'length' => '1',
            'enumeration' => 'F,X,S,I',
        ), 
        'MxStateCode' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'ExportLineItem' => array(
            'type' => 'ExportLineItem',
            'required' => false,
            'subobject' => true,
        ), 
    );
}
