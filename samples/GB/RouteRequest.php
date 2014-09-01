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
 * File:        RouteRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

use DHL\Entity\GB\RouteRequest;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../../init.php');

// DHL Settings
$dhl = $config['dhl'];

// Test a RouteRequestRequest using DHL XML API
$sample = new RouteRequest();

// Set values of the request
$sample->MessageTime = '2013-08-04T11:28:56.000-08:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->SiteID = $dhl['id'];
$sample->Password = $dhl['pass'];
$sample->RegionCode = 'AM';
$sample->RequestType = 'O';
$sample->Address1 = 'Suit 333';
$sample->Address2 = '333 Twin';
$sample->Address3 = '';
$sample->PostalCode = '94089';
$sample->City = 'North Dakhota';
$sample->Division = 'California';
$sample->CountryCode = 'US';
$sample->CountryName = 'United States of America';
$sample->OriginCountryCode = 'US';

// Call DHL XML API
echo $sample->toXML();
$client = new WebserviceClient();
echo $client->call($sample);
