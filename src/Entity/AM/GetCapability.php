<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class GetCapability
 *
 * @package Mtc\Dhl
 */
class GetCapability extends Base
{
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
     * Parent node name of the object
     * @var string
     */
    protected $xml_model_name = 'GetCapability';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'From' => [
            'type' => 'DCTFrom',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ],
        'BkgDetails' => [
            'type' => 'BkgDetailsType',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ],
        'To' => [
            'type' => 'DCTTo',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ],
        'Dutiable' => [
            'type' => 'DCTDutiable',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 0,
        ],
    ];
}
