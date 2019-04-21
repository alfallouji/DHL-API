<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class OriginServiceArea
 *
 * @package Mtc\Dhl
 */
class OriginServiceArea extends \Mtc\Dhl\Datatype\AM\OriginServiceArea
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
    protected $params = [
        'ServiceAreaCode' => [
            'type' => 'ServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL service area code',
            'length' => '3',
        ], 
        'Description' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ], 
        'OutboundSortCode' => [
            'type' => 'OutboundSortCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OutBound Sort Code',
            'maxLength' => '4',
        ], 
    ];
}
