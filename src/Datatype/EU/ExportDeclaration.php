<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class ExportDeclaration
 *
 * @package Mtc\Dhl
 */
class ExportDeclaration extends \Mtc\Dhl\Datatype\AM\ExportDeclaration
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'InterConsignee' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'IsPartiesRelation' => [
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ],
        'ECCN' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'SignatureName' => [
            'type' => 'SignatureName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature name',
            'maxLength' => '35',
        ],
        'SignatureTitle' => [
            'type' => 'SignatureTitle',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature title',
            'maxLength' => '35',
        ],
        'ExportReason' => [
            'type' => 'ExportReason',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason',
            'length' => '1',
        ],
        'ExportReasonCode' => [
            'type' => 'ExportReasonCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason code (P:Permanent, T:Temporary, R:Re-Export)',
            'length' => '1',
            'enumeration' => 'P,T,R',
        ],
        'ShipmentPurpose' => [
            'type' => 'ShipmentPurpose',
            'required' => false,
            'subobject' => false,
            'comment' => 'COMMERCIAL or PERSONAL (B2B / B2C)',
        ],
        'SedNumber' => [
            'type' => 'SEDNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'enumeration' => 'FTSR,XTN,SAS,ITN',
        ],
        'SedNumberType' => [
            'type' => 'SEDNumberType',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'length' => '1',
            'enumeration' => 'F,X,S,I',
        ],
        'PlaceOfIncoterm' => [
            'type' => 'PlaceOfIncoterm',
            'required' => false,
            'subobject' => false,
            'comment' => '',
        ],
        'MxStateCode' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ],
        'ExportLineItems' => [
            'type' => 'ExportLineItem',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
            'disableParentNode' => true,
        ],
        'InvoiceTotalGrossWeight' => [
            'type' => 'InvoiceTotalGrossWeight',
            'required' => false,
            'subobject' => true,
        ],
        'InvoiceNumber' => [
            'type' => 'InvoiceNumber',
            'required' => false,
            'subobject' => true,
        ],
        'InvoiceDate' => [
            'type' => 'InvoiceDate',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
