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
 * File:        ExportDeclaration.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

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
            'type' => 'string',
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
            'maxLength' => '30',
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
        'InvoiceNumber' => array(
            'type' => 'InvoiceNumber',
            'required' => false,
            'subobject' => false,
        ),
        'InvoiceDate' => array(
            'type' => 'InvoiceDate',
            'required' => false,
            'subobject' => false,
        ),
        'BillToCompanyName' => array(
            'type' => 'BillToCompanyName',
            'required' => false,
            'subobject' => false,
        ),
        'BillToContanctName' => array(
            'type' => 'BillToContanctName',
            'required' => false,
            'subobject' => false,
        ),
        'BillToAddressLine' => array(
            'type' => 'BillToAddressLine',
            'required' => false,
            'subobject' => false,
        ),
        'BillToCity' => array(
            'type' => 'BillToCity',
            'required' => false,
            'subobject' => false,
        ),
        'BillToPostcode' => array(
            'type' => 'BillToPostcode',
            'required' => false,
            'subobject' => false,
        ),
        'BillToSuburb' => array(
            'type' => 'BillToSuburb',
            'required' => false,
            'subobject' => false,
        ),
        'BillToState' => array(
            'type' => 'BillToState',
            'required' => false,
            'subobject' => false,
        ),
        'BillToCountryName' => array(
            'type' => 'BillToCountryName',
            'required' => false,
            'subobject' => false,
        ),
        'BillToPhoneNumber' => array(
            'type' => 'BillToPhoneNumber',
            'required' => false,
            'subobject' => false,
        ),
        'BillToPhoneNumberExtn' => array(
            'type' => 'BillToPhoneNumberExtn',
            'required' => false,
            'subobject' => false,
        ),
        'BillToFaxNumber' => array(
            'type' => 'BillToFaxNumber',
            'required' => false,
            'subobject' => false,
        ),
        'BillToFederalTaxID' => array(
            'type' => 'BillToFederalTaxID',
            'required' => false,
            'subobject' => false,
        ),
        'Remarks' => array(
            'type' => 'Remarks',
            'required' => false,
            'subobject' => false,
        ),
        'OtherCharges1' => array(
            'type' => 'OtherCharges1',
            'required' => false,
            'subobject' => false,
        ),
        'OtherCharges2' => array(
            'type' => 'OtherCharges2',
            'required' => false,
            'subobject' => false,
        ),
        'OtherCharges3' => array(
            'type' => 'OtherCharges3',
            'required' => false,
            'subobject' => false,
        ),
        'DestinationPort' => array(
            'type' => 'DestinationPort',
            'required' => false,
            'subobject' => false,
        ),
        'TermsOfPayment' => array(
            'type' => 'TermsOfPayment',
            'required' => false,
            'subobject' => false,
        ),
        'PayerGSTVAT' => array(
            'type' => 'PayerGSTVAT',
            'required' => false,
            'subobject' => false,
        ),
        'ReceiverReference' => array(
            'type' => 'ReceiverReference',
            'required' => false,
            'subobject' => false,
        ),
        'ExporterCode' => array(
            'type' => 'ExporterCode',
            'required' => false,
            'subobject' => false,
        ),
        'PackageMarks' => array(
            'type' => 'PackageMarks',
            'type' => 'PayerGSTVAT',
            'required' => false,
            'subobject' => false,
        ),
        'ReceiverReference' => array(
            'type' => 'ReceiverReference',
            'required' => false,
            'subobject' => false,
        ),
        'ExporterCode' => array(
            'type' => 'ExporterCode',
            'required' => false,
            'subobject' => false,
        ),
        'PackageMarks' => array(
            'type' => 'PackageMarks',
            'required' => false,
            'subobject' => false,
        ),
        'OtherRemarks2' => array(
            'type' => 'OtherRemarks2',
            'required' => false,
            'subobject' => false,
        ),
        'OtherRemarks3' => array(
            'type' => 'OtherRemarks3',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankINN' => array(
            'type' => 'RUBankINN',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankKPP' => array(
+            'type' => 'RUBankKPP',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankOKPO' => array(
            'type' => 'RUBankOKPO',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankOGRN' => array(
            'type' => 'RUBankOGRN',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankSettlementAcctNumUSDEUR' => array(
            'type' => 'RUBankSettlementAcctNumUSDEUR',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankSettlementAcctNumRUR' => array(
            'type' => 'RUBankSettlementAcctNumRUR',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankName' => array(
            'type' => 'RUBankName',
            'required' => false,
            'subobject' => false,
        ),
        'AddDeclText1' => array(
            'type' => 'AddDeclText1',
            'required' => false,
            'subobject' => false,
        ),
        'AddDeclText2' => array(
            'type' => 'AddDeclText2',
            'required' => false,
            'subobject' => false,
        ),
        'AddDeclText3' => array(
            'type' => 'AddDeclText3',
            'required' => false,
            'subobject' => false,
        ),
        'ExportLineItems' => array(
            'type' => 'ExportLineItem',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
            'disableParentNode' => true,
        ),
        'ShipmentDocument' => array(
            'type' => 'ShipmentDocument',
            'required' => false,
            'subobject' => false,
        ),
    );
}
