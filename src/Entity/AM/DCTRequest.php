<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class DCTRequest
 *
 * @package Mtc\Dhl
 */
class DCTRequest extends Base
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
    protected $service_name = 'DCTRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'DCT-req.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = [
        'GetCapability' => [
            'type' => 'GetCapability',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 0,
        ],
    ];
}
