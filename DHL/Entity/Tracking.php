<?php
namespace DHL\Entity;

/**
 * Tracking Request model for DHL API
 */
class Tracking extends Base
{
    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'KnownTrackingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'KnownTrackingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'LanguageCode' => array(
            'type' => 'string',
            'required' => true,
            'acceptedValues' => 'en,fr',
        ),
        'AWBNumber' => array(
            'type' => 'string',
            'required' => true,
        ),
        'LevelOfDetails' => array(
            'type' => 'string',
            'required' => true,
            'acceptedValues' => 'ALL_CHECK_POINTS'
        ),
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => true,
            'acceptedValues' => 'S'
        ),
    );
}
