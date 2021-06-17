<?php

namespace Mtc\Dhl\Datatype\EA;

/**
 * Class Label
 *
 * @package Mtc\Dhl
 */
class Label extends \Mtc\Dhl\Datatype\AM\Label
{

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'LabelTemplate' => [
            'type' => 'LabelTemplate',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelTemplate',
            'enumeration' => '8X4_A4_PDF,8X4_thermal,8X4_A4_TC_PDF,6X4_A4_PDF,8X4_CI_PDF,8X4_CI_thermal',
        ],
        'Logo' => [
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ],
        'CustomerLogo' => [
            'type' => 'CustomerLogo',
            'required' => false,
            'subobject' => true,
        ],
        'Resolution' => [
            'type' => 'Resolution',
            'required' => false,
            'subobject' => false,
            'comment' => 'Resolution',
            'minInclusive' => '200',
            'maxInclusive' => '300',
        ],
    ];
}
