    
## Authors & contact


Al-Fallouji Bashar 
    - bashar@alfallouji.com

    
## Documentation and download


Latest version is available on github at :
    - http://github.com/alfallouji/DHL-API/


## License


This Code is released under the GNU LGPL

Please do not change the header of the file(s).

This library is free software; you can redistribute it and/or modify it 
under the terms of the GNU Lesser General Public License as published 
by the Free Software Foundation; either version 2 of the License, or 
(at your option) any later version.

This library is distributed in the hope that it will be useful, but 
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
or FITNESS FOR A PARTICULAR PURPOSE.

See the GNU Lesser General Public License for more details.


## Description


This library is a PHP Oriented Object client for the DHL XML API Services. DHL XML Services is an online web services integration capability that provides DHL’s service availability, transit times, rates, shipment and courier pickup booking along with shipment tracking from over 140 countries around the world. Using DHL’s XML Services, customers can incorporate DHL shipping functionality into their websites, customer service applications or order processing systems.


## Usage

This client does not rely or depend on any framework and it should be fairly easy to integrate with your own code. You can use the autloader that is provided or your own autoloading mechanism.

The sample folder contains examples on how to use the client and perform requests to DHL XML API, such as track a shipment, create a shipment, request a pickup or print labels.

In order to have the samples working, you will need to create a DHL staging account. You can do that by going to that URL : http://www.dhl.com.au/en/express/resource_center/integrated_shipping_solutions/integrating_xml_services.html

Then, you need to copy the conf/config.sample.php to conf/config.php (that file is loaded init.php).
You need to edit the dhl settings defined in the config/config.php file and provide your account id and password. The samples use those credentials.

```
return array(
	'dhl' => array(
		'id' => 'Your_DHL_ID',
		'pass' => 'Your_DHL_Password',
		'shipperAccountNumber' => 'Your_Number',
		'billingAccountNumber' => 'Your_Number',
		'dutyAccountNumber' => 'Your_Number',
	),
);
```

## Example

### Request a shipment
```
use DHL\Entity\GB\ShipmentRequest;
use DHL\Client\Web as WebserviceClient;
use DHL\Datatype\GB\Piece;

// You may use your own init script, as long as it takes care of autoloading
require(__DIR__ . '/init.php');

// Test a ShipmentRequest using DHL XML API
$sample = new ShipmentRequest();

// Assuming there is a config array variable with id and pass to DHL XML Service
$sample->SiteID = $config['id'];
$sample->Password = $config['pass'];

// Set values of the request
$sample->MessageTime = '2001-12-17T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->RegionCode = 'AM';
$sample->RequestedPickupTime = 'Y';
$sample->NewShipper = 'Y';
$sample->LanguageCode = 'en';
$sample->PiecesEnabled = 'Y';
$sample->Billing->ShipperAccountNumber = $config['shipperAccountNumber'];
$sample->Billing->ShippingPaymentType = 'S';
$sample->Billing->BillingAccountNumber = $config['billingAccountNumber'];
$sample->Billing->DutyPaymentType = 'S';
$sample->Billing->DutyAccountNumber = $config['dutyAccountNumber'];
$sample->Consignee->CompanyName = 'Ssense';
$sample->Consignee->AddressLine = '333 Chabanel West, #900';
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
$sample->LabelImageFormat = 'PDF';

// Call DHL XML API
$start = microtime(true);

// Display the XML that will be sent to DHL
echo $sample->toXML();

// DHL webservice client using the staging environment
$client = new WebserviceClient('staging');

// Call the DHL service and display the XML result
echo $client->call($sample);
echo PHP_EOL . 'Executed in ' . (microtime(true) - $start) . ' seconds.' . PHP_EOL;
```
