<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ExportLineItem Request model for DHL API
 */
class ExportLineItem extends Base
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
        'LineNumber' => array(
            'type' => 'LineNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minInclusive' => '1',
            'maxInclusive' => '200',
        ), 
        'Quantity' => array(
            'type' => 'Quantity',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity',
            'maxInclusive' => '32000',
        ), 
        'QuantityUnit' => array(
            'type' => 'QuantityUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity unit of measure (tens, hundreds,
				thousands, etc.)',
            'maxLength' => '8',
        ), 
        'Description' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Value' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'IsDomestic' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CommodityCode' => array(
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ECCN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Weight' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'License' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'LicenseSymbol' => array(
            'type' => 'LicenseNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export license number',
            'maxLength' => '16',
        ), 
    );
}
