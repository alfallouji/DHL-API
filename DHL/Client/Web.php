<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        Web.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Client;

use DHL\Entity\Base as Request;

/**
 * DHL Webservice Client
 */
class Web
{
    /**
     * Url to services
     * @var string
     */
    private $_stagingUrl = 'https://xmlpitest-ea.dhl.com/XMLShippingServlet?isUTF8Support=true';

    /**
     * Url to services
     * @var string
     */
    private $_productionUrl = 'https://xmlpi-ea.dhl.com/XMLShippingServlet?isUTF8Support=true';

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
     * Call DHL Service
     * 
     * @param Request $request Request to send
     * 
     * @return string DHL XML response string
     */
    public function call(Request $request)
    {
        if (!$ch = curl_init())
        {
            throw new \Exception('could not initialize curl');
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $this->_getUrl());
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

    /**
     * Get url associated to a specific service
     * 
     * @return string URL for the service
     */
    private function _getUrl()
    {
        return ('staging' == $this->_mode) ? $this->_stagingUrl : $this->_productionUrl;
    }
}
