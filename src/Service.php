<?php

namespace Mtc\Dhl;

use Mtc\Dhl\Entity\GB\ShipmentRequest;
use Mtc\Dhl\Entity\GB\ShipmentResponse;
use Mtc\Dhl\Client\Web as WebserviceClient;

/**
 * Class Service
 *
 * @package Mtc\Dhl
 */
class Service
{
    /**
     * Error message on last call
     * @var string
     */
    public $error_message;

    /**
     * Client to DHL webservice
     * @var WebserviceClient
     */
    protected $client;

    /**
     * Service constructor.
     *
     * @param WebserviceClient $client
     */
    public function __construct(WebserviceClient $client)
    {
        $this->client = $client;
    }

    /**
     * Send a shipment request to DHL
     *
     * @param ShipmentRequest Request to send
     *
     * @return bool|ShipmentResponse The Shipment response object upon success, false otherwise
     */
    public function sendShipmentRequest(ShipmentRequest $request)
    {
        // Call DHL XML API
        try {
            $xml = $this->client->call($request);
            $response = new ShipmentResponse();
            $response->initFromXML($xml);
        } catch (\Exception $e) {
            $this->error_message = $e->getMessage();
            return false;
        }

        return $response;
    }
}
