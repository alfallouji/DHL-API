<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

class RegistrationNumbers extends Base
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'RegistrationNumber' => [
            'type' => 'RegistrationNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'multivalues' => true,
        ],
    ];
}
