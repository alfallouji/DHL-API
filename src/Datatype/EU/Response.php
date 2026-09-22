<?php

namespace Mtc\Dhl\Datatype\EU;

/**
 * Class Response
 *
 * @package Mtc\Dhl
 */
class Response extends \Mtc\Dhl\Datatype\AM\Response
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ServiceHeader' => [
            'type' => 'ResponseServiceHeader',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
