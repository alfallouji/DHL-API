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
 * File:        Tracking.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

use DHL\Entity\EA\KnownTrackingRequest as Tracking;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../../init.php');

// DHL Settings
$dhl = $config['dhl'];

// Test a tracking request using DHL XML API
$request = new Tracking();
$request->SiteID = $dhl['id'];
$request->Password = $dhl['pass'];
$request->MessageReference = '1234567890123456789012345678';
$request->MessageTime = '2002-06-25T11:28:55-08:00';
$request->LanguageCode = 'en';
$request->AWBNumber = '8564385550';
$request->LevelOfDetails = 'ALL_CHECK_POINTS';
$request->PiecesEnabled = 'S';

echo $request->toXML();
$client = new WebserviceClient();
$xml = $client->call($request);

$result = new DHL\Entity\EA\TrackingResponse();
$result->initFromXML($xml);
echo $result->toXML();
