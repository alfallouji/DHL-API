<?php

namespace Mtc\Dhl\Entity\AP;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentValidateRequest
 *
 * @package Mtc\Dhl
 */
class ShipmentValidateRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $is_sub_object = false;

    /**
     * Name of the service
     * @var string
     */
    protected $service_name = 'ShipmentValidateRequestAP';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ShipmentValidateRequestAP.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = [
        'LanguageCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
        ],
        'PiecesEnabled' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'Y,N',
        ],
        'Billing' => [
            'type' => 'Billing',
            'required' => false,
            'subobject' => true,
        ],
        'Consignee' => [
            'type' => 'Consignee',
            'required' => false,
            'subobject' => true,
        ],
        'Commodity' => [
            'type' => 'Commodity',
            'required' => false,
            'subobject' => true,
        ],
        'Dutiable' => [
            'type' => 'Dutiable',
            'required' => false,
            'subobject' => true,
        ],
        'ExportDeclaration' => [
            'type' => 'ExportDeclaration',
            'required' => false,
            'subobject' => true,
        ],
        'Reference' => [
            'type' => 'Reference',
            'required' => false,
            'subobject' => true,
        ],
        'ShipmentDetails' => [
            'type' => 'ShipmentDetails',
            'required' => false,
            'subobject' => true,
        ],
        'Shipper' => [
            'type' => 'Shipper',
            'required' => false,
            'subobject' => true,
        ],
        'SpecialService' => [
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ],
        'EProcShip' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Airwaybill' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'DocImages' => [
            'type' => 'DocImages',
            'required' => false,
            'subobject' => true,
        ],
        'LabelImageFormat' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelImageFormat',
            'minLength' => '3',
            'maxLength' => '4',
            'enumeration' => 'PDF,ZPL2,EPL2',
        ],
        'RequestArchiveDoc' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'Label' => [
            'type' => 'Label',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
