Example request:
```php
$shipment = new ShipmentRequest();
$shipment->SiteID = $order->auth->account_number;
$shipment->Password = $order->auth->password;
$shipment->MessageTime = Carbon::now()->format(Carbon::ATOM);
$shipment->MessageReference = substr($reference, 0, 30);
$shipment->LanguageCode = 'en';
$shipment->PiecesEnabled = 'Y';
$shipment->Reference->ReferenceID = $client->account . '-' . $order->id;

$shipment->Billing->ShipperAccountNumber = $order->auth->shipper_account;
$shipment->Billing->ShippingPaymentType = 'S';
$shipment->Billing->BillingAccountNumber = $order->auth->billing_account;

// Outside EU changes Tax info
if (!Country::isEu($shipping_address->country)) {
    $shipment->Billing->DutyPaymentType = 'R';
}

$contact_name = $shipping_address->first_name . ' ' . $shipping_address->last_name;
$shipment->Consignee->CompanyName = $shipping_address->organisation ?? '--';
$shipment->Consignee->Contact->PersonName = $contact_name;
$shipment->Consignee->addAddressLine(substr($shipping_address->address1, 0, 35));
$shipment->Consignee->addAddressLine(substr($shipping_address->address2, 0, 35));
$shipment->Consignee->City = $shipping_address->city;
$shipment->Consignee->PostalCode = $shipping_address->postcode;
$shipment->Consignee->Division = $shipping_address->state ?? '';
$shipment->Consignee->CountryCode = $shipping_address->country;
$shipment->Consignee->CountryName = Country::getNameFromCode($shipping_address->country);
$shipment->Consignee->Contact->PhoneNumber = $order->info->contact_no;
$shipment->Consignee->Contact->Email = $order->info->email;
$shipment->Consignee->Contact->PhoneExtension = '';
$shipment->Consignee->Contact->FaxNumber = '';
$shipment->Consignee->Contact->Telex = '';
$shipment->RegionCode = Country::getDHLRegionCode($shipping_address->country);

$order_value = $order->order_cost - $order->delivery_cost > 0 ? $order->order_cost - $order->delivery_cost : 1.0;
$shipment->Dutiable->DeclaredValue = $order_value;
$shipment->Dutiable->DeclaredCurrency = 'GBP';
$shipment->Dutiable->TermsOfTrade = 'DDP';

$shipment->Shipper->ShipperID = $order->auth->shipper_id;
$shipment->Shipper->RegisteredAccount = $order->auth->shipper_account_number;
$shipment->Shipper->CompanyName = $collection_address->organisation;
$shipment->Shipper->addAddressLine($collection_address->address1);
$shipment->Shipper->addAddressLine($collection_address->address2);
$shipment->Shipper->City = $collection_address->city;
$shipment->Shipper->PostalCode = $collection_address->postcode;
$shipment->Shipper->CountryCode = $collection_address->country;
$shipment->Shipper->CountryName = Country::getNameFromCode($collection_address->country);

$shipment->Shipper->Contact->PersonName = $collection_address->contact_name;
$shipment->Shipper->Contact->PhoneNumber = $collection_address->contact_phone;
$shipment->Shipper->Contact->Email = $collection_address->contact_email;
$shipment->Shipper->Contact->PhoneExtension = '';
$shipment->Shipper->Contact->FaxNumber = '';
$shipment->Shipper->Contact->Telex = '';

// Delivery Service is obtained via Quote request which will find valid services for shipment
$shipment->ShipmentDetails->GlobalProductCode = $delivery_service->code;
$shipment->ShipmentDetails->LocalProductCode = $delivery_service->format;

if (Country::isEu($shipping_address->country) === false) {
    $shipment->ShipmentDetails->DoorTo = 'DD';
}
$shipment->ShipmentDetails->Contents = 'Shipment Description';
$shipment->ShipmentDetails->CurrencyCode = 'GBP';
$shipment->ShipmentDetails->WeightUnit = 'K';
$shipment->ShipmentDetails->Weight = collect($packages)->sum('weight');
$shipment->ShipmentDetails->Date = Carbon::now()->format('Y-m-d');
$shipment->ShipmentDetails->DimensionUnit = 'C';
$shipment->ShipmentDetails->InsuredAmount = $order->insurance_total ?? 0;
$shipment->ShipmentDetails->PackageType = $order->package_type ?? 'PA';
$shipment->ShipmentDetails->IsDutiable = Country::isEu($shipping_address->country) ? 'Y' : 'N';

$shipment->ShipmentDetails->AdditionalProtection = new AdditionalProtection();
$shipment->ShipmentDetails->DOSFlag = 'N';
$shipment->ShipmentDetails->CustData = $contact_name;

// Information about Packages in shipment
$shipment->ShipmentDetails->NumberOfPieces = count($packages);
foreach ($packages as $package_id => $package) {
    $piece = new Piece();
    $piece->PieceID = $client->account . $order->id . $package_id;
    $piece->PackageType = $order->package_type ?? 'CP';
    $piece->Weight = $package['weight'];
    $piece->DimWeight = $package['weight'];
    $shipment->ShipmentDetails->addPiece($piece);
}

$shipment->EProcShip = 'N';
$shipment->LabelImageFormat = 'PDF';
$shipment->Label->LabelTemplate = '8X4_PDF';

$client = new Web($this->getEnvironment());
$xml_response = $client->call($shipment);
```

If you need XML request for the DHL certification you can obtain by calling the following code 
```php
$request_xml = $shipment->toXml();
```