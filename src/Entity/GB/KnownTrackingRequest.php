<?php

namespace Mtc\Dhl\Entity\GB;

use Mtc\Dhl\Entity\Base;

/**
 * Class KnownTrackingRequest
 *
 * @package Mtc\Dhl
 */
class KnownTrackingRequest extends Base
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
    protected $service_name = 'KnownTrackingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'KnownTrackingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'LanguageCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
            'maxLength' => '2',
        ],
        'AWBNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ],
        'LPNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ],
        'LevelOfDetails' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Checkpoint details selection flag',
            'enumeration' => 'LAST_CHECK_POINT_ONLY,ALL_CHECK_POINTS',
        ],
        'PiecesEnabled' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'S,B,P',
        ],
        'CountryCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ],
    ];
}
