<?php

namespace Mtc\Dhl\Datatype\GB;

use Mtc\Dhl\Datatype\Base;

/**
 * Class AdditionalProtection
 *
 * @package Mtc\Dhl
 */
class AdditionalProtection extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'Code' => [
            'type' => 'Code',
            'required' => false,
            'subobject' => false,
            'comment' => 'Code',
            'length' => '2',
            'enumeration' => 'AP,NR',
        ],
        'Value' => [
            'type' => 'Value',
            'required' => false,
            'subobject' => false,
            'comment' => 'Value',
            'maxInclusive' => '9999999.99',
        ],
    ];
}
