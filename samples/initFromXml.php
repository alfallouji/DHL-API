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
 * File:        ShipmentRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

use DHL\Entity\GB\ShipmentResponse;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../init.php');

// Test a ShipmentRequestRequest using DHL XML API
$sample = new ShipmentResponse();
$xml = file_get_contents(__DIR__ . '/result.xml');

// Call DHL XML API
$start = microtime(true);
$sample->initFromXML($xml);

echo $sample->toXML();
//print_r($sample->toXML());
