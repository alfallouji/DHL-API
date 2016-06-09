    
## Authors & contact


Al-Fallouji Bashar 
    - bashar@alfallouji.com

    
## Documentation and download


Latest version is available on github at :
    - http://github.com/alfallouji/DHL-API/


## License


```
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
```


## Description


This library is a PHP Oriented Object client for the DHL XML API Services. DHL XML Services is an online web services integration capability that provides DHL’s service availability, transit times, rates, shipment and courier pickup booking along with shipment tracking from over 140 countries around the world. Using DHL’s XML Services, customers can incorporate DHL shipping functionality into their websites, customer service applications or order processing systems.


## Setup 

You can use composer to use this library.

```php
{
    "require": {
		"alfallouji/dhl_api": "*"
    }
}
```


## Usage

This client does not rely or depend on any framework and it should be fairly easy to integrate with your own code. You can use the autloader that is provided or your own autoloading mechanism.

The sample folder contains examples on how to use the client and perform requests to DHL XML API, such as track a shipment, create a shipment, request a pickup or print labels.

In order to have the samples working, you will need to create a DHL staging account. You can do that by going to that URL : http://www.dhl.com.au/en/express/resource_center/integrated_shipping_solutions/integrating_xml_services.html

Then, you need to copy the conf/config.sample.php to conf/config.php (that file is loaded init.php).
You need to edit the dhl settings defined in the config/config.php file and provide your account id and password. The samples use those credentials.

```php
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
```php
use DHL\Entity\GB\ShipmentResponse;
use DHL\Entity\GB\ShipmentRequest;
use DHL\Client\Web as WebserviceClient;
use DHL\Datatype\GB\Piece;
use DHL\Datatype\GB\SpecialService;

// You may use your own init script, as long as it takes care of autoloading
require(__DIR__ . '/init.php');

// DHL settings
$dhl = $config['dhl'];

// Test a ShipmentRequest using DHL XML API
$sample = new ShipmentRequest();

// Assuming there is a config array variable with id and pass to DHL XML Service
$sample->SiteID = $dhl['id'];
$sample->Password = $dhl['pass'];

// Set values of the request
$sample->MessageTime = '2001-12-17T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
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
$sample->ShipmentDetails->InsuredAmount = '1200.00';
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

// Display the XML that will be sent to DHL
echo $sample->toXML();

// DHL webservice client using the staging environment
$client = new WebserviceClient('staging');

// Call the DHL service and display the XML result
echo $client->call($sample);
echo PHP_EOL . 'Executed in ' . (microtime(true) - $start) . ' seconds.' . PHP_EOL;
```

### How to display or store the PDF label ?

The label is encoded using base64 encoding.

If you would like to get the binary version in order to store it as .PDF or to display it on the browser, you will need to decode it.

For example, the image label is returned in the LabelImage->OutputImage node.

```xml
<req:ShipmentResponse>

....

<LabelImage>
  <OutputFormat>PDF</OutputFormat
 <OutputImage>......JVBERi0xLjQKJ.....</OutputImage>
</LabelImage>
</req:ShipmentResponse>
```

In PHP, you will need to do the following in order to decode the string.

```php
// We already built our DHL request object, we can call DHL XML API
$client = new WebserviceClient('staging');
$xml = $client->call($request);
$response = new ShipmentResponse();
$response->initFromXML($xml);

// Store it as a . PDF file in the filesystem
file_put_contents('dhl-label.pdf', base64_decode($response->LabelImage->OutputImage));

// If you want to display it in the browser
$data = base64_decode($response->LabelImage->OutputImage);
if ($data)
{
    header('Content-Type: application/pdf');
    header('Content-Length: ' . strlen($data));
    echo $data;
}
```

### How to get quotations for a shipment ? ###

You can use the getQuote or getCapability service for that. Here is an example.

```php
use DHL\Entity\AM\GetQuote;
use DHL\Datatype\AM\PieceType;
use DHL\Client\Web as WebserviceClient;

require(__DIR__ . '/../../init.php');

// DHL Settings
$dhl = $config['dhl'];

// Test a getQuote using DHL XML API
$sample = new GetQuote();
$sample->SiteID = $dhl['id'];
$sample->Password = $dhl['pass'];


// Set values of the request
$sample->MessageTime = '2001-12-17T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->BkgDetails->Date = date('Y-m-d');

$piece = new PieceType();
$piece->PieceID = 1;
$piece->Height = 10;
$piece->Depth = 5;
$piece->Width = 10;
$piece->Weight = 10;
$sample->BkgDetails->addPiece($piece);
$sample->BkgDetails->IsDutiable = 'Y';
$sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';
$sample->BkgDetails->ReadyTime = 'PT10H21M';
$sample->BkgDetails->ReadyTimeGMTOffset = '+01:00';
$sample->BkgDetails->DimensionUnit = 'CM';
$sample->BkgDetails->WeightUnit = 'KG';
$sample->BkgDetails->PaymentCountryCode = 'CA';
$sample->BkgDetails->IsDutiable = 'Y';

// Request Paperless trade
$sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';

$sample->From->CountryCode = 'CA';
$sample->From->Postalcode = 'H3E1B6';
$sample->From->City = 'Montreal';

$sample->To->CountryCode = 'CH';
$sample->To->Postalcode = '1226';
$sample->To->City = 'Thonex';
$sample->Dutiable->DeclaredValue = '100.00';
$sample->Dutiable->DeclaredCurrency = 'CHF';

// Call DHL XML API
$start = microtime(true);
echo $sample->toXML();
$client = new WebserviceClient('staging');
$xml = $client->call($sample);
echo PHP_EOL . 'Executed in ' . (microtime(true) - $start) . ' seconds.' . PHP_EOL;
echo $xml . PHP_EOL;
```

