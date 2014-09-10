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
 * File:        Benchmark-ShipmentRequest.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

use DHL\Entity\GB\ShipmentRequest;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../../init.php');

// Test a ShipmentRequestRequest using DHL XML API
$sample = new ShipmentRequest();

// Set values of the request
$sample->MessageTime = '2001-12-17T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->SiteID = $config['id'];
$sample->Password = $config['pass'];
$sample->RegionCode = 'AM';
$sample->RequestedPickupTime = 'Y';
$sample->NewShipper = 'Y';
$sample->LanguageCode = 'en';
$sample->PiecesEnabled = 'Y';
$sample->Billing->ShipperAccountNumber = $config['ShipperAccountNumber'];
$sample->Billing->ShippingPaymentType = 'S';
$sample->Billing->BillingAccountNumber = $config['BillingAccountNumber'];
$sample->Billing->DutyPaymentType = 'S';
$sample->Billing->DutyAccountNumber = $config['DutyAccountNumber'];
$sample->Consignee->CompanyName = 'Ssense';
$sample->Consignee->AddressLine = '333 Chabanel West, #900';
$sample->Consignee->City = 'Montreal';
$sample->Consignee->PostalCode = 'H3E1G6';
$sample->Consignee->CountryCode = 'CA';
$sample->Consignee->CountryName = 'Canada';
$sample->Consignee->Contact->PersonName = 'Mrs Orlander';
$sample->Consignee->Contact->PhoneNumber = '506-851-2271';
$sample->Consignee->Contact->PhoneExtension = '7862';
$sample->Consignee->Contact->FaxNumber = '506-851-7403';
$sample->Consignee->Contact->Telex = '506-851-7121';
$sample->Consignee->Contact->Email = 'anc.email.com';
$sample->Commodity->CommodityCode = 'cc';
$sample->Commodity->CommodityName = 'cn';
$sample->Dutiable->DeclaredValue = '200.00';
$sample->Dutiable->DeclaredCurrency = 'USD';
$sample->Dutiable->ScheduleB = '3002905110';
$sample->Dutiable->ExportLicense = 'D123456';
$sample->Dutiable->ShipperEIN = '112233445566';
$sample->Dutiable->ShipperIDType = 'S';
$sample->Dutiable->ImportLicense = 'ImportLic';
$sample->Dutiable->ConsigneeEIN = 'ConEIN2123';
$sample->Dutiable->TermsOfTrade = 'DTP';
$sample->Reference->ReferenceID = 'AM international shipment';
$sample->Reference->ReferenceType = 'St';
$sample->ShipmentDetails->NumberOfPieces = '1';
$sample->ShipmentDetails->Pieces->Piece->PieceID = '1';
$sample->ShipmentDetails->Pieces->Piece->PackageType = 'EE';
$sample->ShipmentDetails->Pieces->Piece->Weight = '10.0';
$sample->ShipmentDetails->Pieces->Piece->DimWeight = '1200.0';
$sample->ShipmentDetails->Pieces->Piece->Width = '100';
$sample->ShipmentDetails->Pieces->Piece->Height = '200';
$sample->ShipmentDetails->Pieces->Piece->Depth = '300';
$sample->ShipmentDetails->Weight = '10.0';
$sample->ShipmentDetails->WeightUnit = 'L';
$sample->ShipmentDetails->GlobalProductCode = 'P';
$sample->ShipmentDetails->LocalProductCode = 'P';
$sample->ShipmentDetails->Date = '2014-08-05';
$sample->ShipmentDetails->Contents = 'AM international shipment contents';
$sample->ShipmentDetails->DoorTo = 'DD';
$sample->ShipmentDetails->DimensionUnit = 'I';
$sample->ShipmentDetails->InsuredAmount = '1200.00';
$sample->ShipmentDetails->PackageType = 'EE';
$sample->ShipmentDetails->IsDutiable = 'Y';
$sample->ShipmentDetails->CurrencyCode = 'USD';
$sample->Shipper->ShipperID = '751008818';
$sample->Shipper->CompanyName = 'IBM Corporation';
$sample->Shipper->RegisteredAccount = '751008818';
$sample->Shipper->AddressLine = '1 New Orchard Road';
$sample->Shipper->AddressLine = 'Armonk';
$sample->Shipper->City = 'New York';
$sample->Shipper->Division = 'ny';
$sample->Shipper->DivisionCode = 'ny';
$sample->Shipper->PostalCode = '10504';
$sample->Shipper->CountryCode = 'US';
$sample->Shipper->CountryName = 'United States Of America';
$sample->Shipper->Contact->PersonName = 'Mr peter';
$sample->Shipper->Contact->PhoneNumber = '1 905 8613402';
$sample->Shipper->Contact->PhoneExtension = '3403';
$sample->Shipper->Contact->FaxNumber = '1 905 8613411';
$sample->Shipper->Contact->Telex = '1245';
$sample->Shipper->Contact->Email = 'test@email.com';
$sample->SpecialService->SpecialServiceType = 'A';
$sample->SpecialService->SpecialServiceType = 'I';
$sample->EProcShip = 'N';

$times = $responses = array();
$testSet = 5;
$testSetCpt = 1;

while ($testSetCpt <= $testSet)
{
    echo PHP_EOL . PHP_EOL . 'Test Sequence ' . $testSetCpt . PHP_EOL . '------------------';
    $values = array('ZPL2', 'EPL2', 'PDF');
    $max = 10;
    $testSetTime[$testSetCpt] = $times;
    $testSetResponse[$testSetCpt] = $responses;
    $times = array();
    $responses = array();

    foreach ($values as $value) 
    {
        $sample->LabelImageFormat = $value;

        // Call DHL XML API
        //    echo $sample->toXML();
        echo PHP_EOL . 'Testing with ' . $value . ' - ' . $max . ' times' . PHP_EOL;

        $cpt = 1;
        while ($cpt <= $max)
        {
            $startTime = microtime(true);
            $client = new WebserviceClient('staging');
            $response = $client->call($sample);
            $time = microtime(true) - $startTime;

            $xml = simplexml_load_string($response);
            echo 'Waybill number : ' . (string) $xml->AirwayBillNumber . PHP_EOL;

            echo 'Call ' . $cpt . "\t: " . $time . PHP_EOL;
            $times[$value][] = $time;
            $responses[$value][] = $response;
            ++$cpt;

        }
        echo 'Average ' . (array_sum($times[$value]) / $max) . PHP_EOL;
    }

    ++$testSetCpt;
}

//var_dump($times);
