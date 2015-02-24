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
use DHL\Entity\GB\ShipmentRequest;
use DHL\Client\Web as WebserviceClient;
use DHL\Datatype\GB\Piece;
use DHL\Datatype\GB\SpecialService;

require(__DIR__ . '/../../init.php');

// DHL Settings
$dhl = $config['dhl'];

// Test a ShipmentRequestRequest using DHL XML API
$sample = new ShipmentRequest();

// Set values of the request
$sample->MessageTime = '2001-12-17T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->SiteID = $dhl['id'];
$sample->Password = $dhl['pass'];
$sample->RegionCode = 'AM';
$sample->RequestedPickupTime = 'Y';
$sample->NewShipper = 'Y';
$sample->LanguageCode = 'en';
$sample->PiecesEnabled = 'Y';
$sample->Billing->ShipperAccountNumber = $dhl['shipperAccountNumber'];
$sample->Billing->ShippingPaymentType = 'S';
$sample->Billing->BillingAccountNumber = $dhl['billingAccountNumber'];
$sample->Billing->DutyPaymentType = 'S';
$sample->Billing->DutyAccountNumber = $dhl['dutyAccountNumber'];
$sample->Consignee->CompanyName = 'Ssense';
$sample->Consignee->addAddressLine('333 Chabanel West, #900');
$sample->Consignee->City = 'Montreal';
$sample->Consignee->PostalCode = 'H3E1G6';
$sample->Consignee->CountryCode = 'CA';
$sample->Consignee->CountryName = 'Canada';
$sample->Consignee->Contact->PersonName = 'Bashar Al-Fallouji';
$sample->Consignee->Contact->PhoneNumber = '0435 336 653';
$sample->Consignee->Contact->PhoneExtension = '123';
$sample->Consignee->Contact->FaxNumber = '506-851-7403';
$sample->Consignee->Contact->Telex = '506-851-7121';
$sample->Consignee->Contact->Email = 'bashar@alfallouji.com';
$sample->Commodity->CommodityCode = 'cc';
$sample->Commodity->CommodityName = 'cn';
$sample->Dutiable->DeclaredValue = '200.00';
$sample->Dutiable->DeclaredCurrency = 'USD';
$sample->Dutiable->ScheduleB = '3002905110';
$sample->Dutiable->ExportLicense = 'D123456';
$sample->Dutiable->ShipperEIN = '112233445566';
$sample->Dutiable->ShipperIDType = 'S';
$sample->Dutiable->ImportLicense = 'ALFAL';
$sample->Dutiable->ConsigneeEIN = 'ConEIN2123';
$sample->Dutiable->TermsOfTrade = 'DTP';
$sample->Reference->ReferenceID = 'AM international shipment';
$sample->Reference->ReferenceType = 'St';
$sample->ShipmentDetails->NumberOfPieces = 2;

$piece = new Piece();
$piece->PieceID = '1';
$piece->PackageType = 'EE';
$piece->Weight = '5.0';
$piece->DimWeight = '600.0';
$piece->Width = '50';
$piece->Height = '100';
$piece->Depth = '150';
$sample->ShipmentDetails->addPiece($piece);

$piece = new Piece();
$piece->PieceID = '2';
$piece->PackageType = 'EE';
$piece->Weight = '5.0';
$piece->DimWeight = '600.0';
$piece->Width = '50';
$piece->Height = '100';
$piece->Depth = '150';
$sample->ShipmentDetails->addPiece($piece);

$sample->ShipmentDetails->Weight = '10.0';
$sample->ShipmentDetails->WeightUnit = 'L';
$sample->ShipmentDetails->GlobalProductCode = 'P';
$sample->ShipmentDetails->LocalProductCode = 'P';
$sample->ShipmentDetails->Date = date('Y-m-d');
$sample->ShipmentDetails->Contents = 'AM international shipment contents';
$sample->ShipmentDetails->DoorTo = 'DD';
$sample->ShipmentDetails->DimensionUnit = 'I';
$sample->ShipmentDetails->InsuredAmount = '1000.00';
$sample->ShipmentDetails->PackageType = 'EE';
$sample->ShipmentDetails->IsDutiable = 'Y';
$sample->ShipmentDetails->CurrencyCode = 'USD';
$sample->Shipper->ShipperID = '751008818';
$sample->Shipper->CompanyName = 'IBM Corporation';
$sample->Shipper->RegisteredAccount = '751008818';
$sample->Shipper->addAddressLine('1 New Orchard Road');
$sample->Shipper->addAddressLine('Armonk');
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

$specialService = new SpecialService();
$specialService->SpecialServiceType = 'A';
$sample->addSpecialService($specialService);

$specialService = new SpecialService();
$specialService->SpecialServiceType = 'I';
$sample->addSpecialService($specialService);

$sample->EProcShip = 'N';
$sample->LabelImageFormat = 'PDF';

// Call DHL XML API
$start = microtime(true);
echo $sample->toXML();
$client = new WebserviceClient('staging');
$xml = $client->call($sample);
echo PHP_EOL . 'Executed in ' . (microtime(true) - $start) . ' seconds.' . PHP_EOL;

$response = new ShipmentResponse();
$response->initFromXML($xml);
echo $xml . PHP_EOL . $response->toXML();
