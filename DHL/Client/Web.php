<?php
namespace DHL\Client;

use DHL\Entity\Base as Request;

/**
 * DHL Webservice Client
 */
class Web
{
    /**
     * Urls to services
     * @var array
     */
    private $_stagingUrls = array(
        'track' => 'https://xmlpitest-ea.dhl.com/XMLShippingServlet',
    );

    /**
     * Urls to services
     * @var array
     */
    private $_productionUrls = array(
        'track' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
    );

    /**
     * Use production server or staging
     * @var string
     */
    protected $_mode = 'staging';

    /**
     * Class constructor
     * 
     * @var string $mode Mode can be either production or staging
     */
    public function __construct($mode = 'staging')
    {
        if (!in_array($mode, array('staging', 'production'))) 
        {
            throw new \InvalidArgumentException('Invalid mode : ' . $mode . '. Accepted values are : staging or production.');
        }
        $this->_mode = $mode;
    }

    /**
     * Track a shipment
     * @param Request $request Request to send
     *
     * @return string DHL XML Response
     */
    public function track(Request $request)
    {
        $response = $this->_callService('track', $request);

        return $response;
    }

    /**
     * Call DHL API for a specific operation
     * 
     * @param string $call Call to perform
     * @param Request $request Request to send
     *
     * @return string DHL XML Response
     */
    public function call($call, Request $request)
    {
        $response = $this->_callService('track', $request);

        return $response;
    }


    /**
     * Get url associated to a specific service
     * 
     * @param string $serviceName Name of the service
     * 
     * @return string URL for the service
     */
    private function _getUrl($serviceName) 
    {
        $urls = ('staging' == $this->_mode) ? $this->_stagingUrls : $this->_productionUrls;
        if (!array_key_exists($serviceName, $urls)) 
        {
            throw new \InvalidArgumentException('No url associated with type : ' . $serviceName);
        }

        return $urls[$serviceName];
    }

    /**
     * Call DHL Service
     * 
     * @param string $serviceName Name of the service
     * @param Request $request Request to send
     * 
     * @return string DHL XML response string
     */
    private function _callService($serviceName, Request $request)
    {
	    if (!$ch = curl_init())
		{
            throw new \Exception('could not initialize curl');
		}

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $this->_getUrl($serviceName));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_PORT , 443);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request->toXML());
        $result = curl_exec($ch);
        
        if (curl_error($ch))
        {
            return false;
        }
        else
        {
            curl_close($ch);
        }

        return $result;
    }
}
