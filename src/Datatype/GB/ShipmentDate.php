<?php

namespace Mtc\Dhl\Datatype\GB;

/**
 * Class ShipmentDate
 *
 * @package Mtc\Dhl
 */
class ShipmentDate extends \Mtc\Dhl\Datatype\AM\ShipmentDate
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ShipmentDateFrom' => [
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
            'pattern' => '[0-9][0-9][0-9][0-9](-)[0-9][0-9](-)[0-9][0-9]',
        ],
        'ShipmentDateTo' => [
            'type' => 'Date',
            'required' => false,
            'subobject' => false,
            'comment' => 'Date only',
            'pattern' => '[0-9][0-9][0-9][0-9](-)[0-9][0-9](-)[0-9][0-9]',
        ],
    ];
}
