Example request:
```php
$pickup = new BookPURequest();
$pickup->SiteID = 'ACCOUNT_NUMBER';
$pickup->Password = 'PASSWORD';
$pickup->MessageTime = Carbon::now()->format(Carbon::ATOM);
$pickup->MessageReference = 'reference_28_to_32_characters';

$pickup->Requestor->AccountNumber = 'SHIPPER_ACCOUNT';
$pickup->Requestor->AccountType = 'D';
$pickup->Requestor->CompanyName = $address->organisation;
$pickup->Requestor->RequestorContact->PersonName = $address->contact_name;
$pickup->Requestor->RequestorContact->Phone = $address->contact_phone;

// DHL REGION based on the Toolkit documentation for the pickup country
$pickup->RegionCode = $dhl_region;

$pickup->Place->LocationType = 'B';
$pickup->Place->CompanyName = $address->organisation;
$pickup->Place->Address1 = $address->address1;
$pickup->Place->Address2 = $address->address2;
$pickup->Place->PackageLocation = 'Ask receptionist';
$pickup->Place->City = $address->city;
$pickup->Place->CountryCode = $address->country;
$pickup->Place->PostalCode = $address->postcode;

$pickup->Pickup->PickupDate = $pickup_time;
$pickup->Pickup->ReadyByTime = '13:00';
$pickup->Pickup->CloseTime = '17:00';

$pickup->PickupContact->PersonName = $address->contact_name;
$pickup->PickupContact->Phone = $address->contact_phone;

$pickup->ShipmentDetails->AccountType = 'D';
$pickup->ShipmentDetails->AccountNumber = 'SHIPPER_ACCOUINT';
$pickup->ShipmentDetails->BillToAccountNumber = 'BILLING_ACCOUNT';

$pickup->ShipmentDetails->AWBNumber = $tracking_number;
$pickup->ShipmentDetails->NumberOfPieces = $package_count;
$pickup->ShipmentDetails->GlobalProductCode = $shipment_product_code;
$pickup->ShipmentDetails->Weight = $package_weight;
$pickup->ShipmentDetails->WeightUnit = 'K';
$pickup->ShipmentDetails->DoorTo = 'DD';
$pickup->ShipmentDetails->DimensionUnit = 'C';

$client = new Web($this->getEnvironment());
$xml_response = $client->call($pickup);
```

If you need XML request for the DHL certification you can obtain by calling the following code 
```php
$request_xml = $pickup->toXml();
```