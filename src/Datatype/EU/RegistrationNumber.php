<?php

namespace Mtc\Dhl\Datatype\EU;

use Mtc\Dhl\Datatype\Base;

class RegistrationNumber extends Base
{
    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'Number' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Number value',
        ],
        'NumberTypeCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Number type (e.g. VAT, EOR)',
        ],
        'NumberIssuerCountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Country Code that issued the Number',
        ],
    ];
}
