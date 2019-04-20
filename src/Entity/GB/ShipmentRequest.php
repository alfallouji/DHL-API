<?php

namespace Mtc\Dhl\Entity\GB;

use Mtc\Dhl\Entity\Base;

/**
 * Class ShipmentRequest
 *
 * @package Mtc\Dhl
 */
class ShipmentRequest extends Base
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
    protected $service_name = 'ShipmentRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'ship-val-global-req-6.2.xsd';

    /**
     * Display the schema version
     * @var boolean
     */
    protected $display_schema_version = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'RegionCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'RegionCode',
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'AP,EU,AM',
        ],
        'RequestedPickupTime' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'NewShipper' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'LanguageCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
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
            'disableParentNode' => true,
            'multivalues' => true,
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ],
        'Notification' => [
            'type' => 'Notification',
            'required' => false,
            'subobject' => true,
        ],
        'Place' => [
            'type' => 'Place',
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
            'type' => 'DocImage',
            'multivalues' => true,
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
        'NumberOfArchiveDoc' => [
            'type' => 'integer',
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
