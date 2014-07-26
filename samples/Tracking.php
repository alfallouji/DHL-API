<?php
use DHL\Entity\Tracking;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../init.php');

// Test a tracking request using DHL XML API
$request = new Tracking();
$request->SiteID = 'id';
$request->Password = 'pass';
$request->MessageReference = '1234567890123456789012345678';
$request->MessageTime = '2002-06-25T11:28:55-08:00';
$request->LanguageCode = 'en';
$request->AWBNumber = '8564385550';
$request->LevelOfDetails = 'ALL_CHECK_POINTS';
$request->PiecesEnabled = 'S';

$client = new WebserviceClient();
echo $client->track($request);
