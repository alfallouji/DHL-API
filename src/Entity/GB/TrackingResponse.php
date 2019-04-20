<?php

namespace Mtc\Dhl\Entity\GB;

use Mtc\Dhl\Entity\Base;

/**
 * Class TrackingResponse
 *
 * @package Mtc\Dhl
 */
class TrackingResponse extends Base
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
    protected $service_name = 'TrackingResponse';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'TrackingResponse.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'Response' => [
            'type' => 'Response',
            'required' => false,
            'subobject' => true,
        ],
        'AWBInfo' => [
            'type' => 'AWBInfo',
            'required' => false,
            'subobject' => true,
        ],
        'Fault' => [
            'type' => 'Fault',
            'required' => false,
            'subobject' => true,
        ],
        'LanguageCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ],
    ];
}
