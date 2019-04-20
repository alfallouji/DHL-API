<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class Dutiable
 *
 * @package Mtc\Dhl
 */
class Dutiable extends \Mtc\Dhl\Datatype\AM\Dutiable
{

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'DeclaredValue' => [
            'type' => 'DeclaredValue',
            'required' => false,
            'subobject' => false,
            'comment' => 'DeclaredValue',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ], 
        'DeclaredCurrency' => [
            'type' => 'CurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ], 
        'ScheduleB' => [
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ], 
        'ExportLicense' => [
            'type' => 'ExportLicense',
            'required' => false,
            'subobject' => false,
            'comment' => 'ExportLicense',
            'maxLength' => '16',
        ], 
        'ShipperEIN' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ], 
        'ShipperIDType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ], 
        'ConsigneeIDType' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ], 
        'ImportLicense' => [
            'type' => 'ImportLicense',
            'required' => false,
            'subobject' => false,
            'comment' => '\"ImportLicense\"',
            'maxLength' => '16',
        ], 
        'ConsigneeEIN' => [
            'type' => '',
            'required' => false,
            'subobject' => false,
        ], 
        'TermsOfTrade' => [
            'type' => 'TermsOfTrade',
            'required' => false,
            'subobject' => false,
            'comment' => '\"TermsOfTrade\"',
            'maxLength' => '3',
        ], 
        'CommerceLicensed' => [
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ], 
        'Filing' => [
            'type' => 'Filing',
            'required' => false,
            'subobject' => true,
        ], 
    ];
}
