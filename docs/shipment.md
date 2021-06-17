Example request:

```php
use Mtc\Dhl\Client\Web;
use Mtc\Dhl\Datatype\AM\DocImage;
use Mtc\Dhl\Datatype\EU\AdditionalProtection;
use Mtc\Dhl\Datatype\EU\ExportLineItem;
use Mtc\Dhl\Datatype\EU\GrossWeight;
use Mtc\Dhl\Datatype\EU\Piece;
use Mtc\Dhl\Datatype\EU\RegistrationNumber;
use Mtc\Dhl\Datatype\EU\SpecialService;
use Mtc\Dhl\Datatype\EU\Weight;
use Mtc\Dhl\Entity\EU\ShipmentRequest;

$shipment = new ShipmentRequest();
$shipment->SiteID = $order->auth->account_number;
$shipment->Password = $order->auth->password;
$shipment->MessageTime = Carbon::now()->format(Carbon::ATOM);
$shipment->MessageReference = substr($reference, 0, 30);
$shipment->LanguageCode = 'en';
$shipment->Reference->ReferenceID = $reference_prefix . '-' . $order->id;

$shipment->SoftwareName = '3PV';
$shipment->SoftwareVersion = '6.2';

$shipment->Billing->ShipperAccountNumber = $order->auth->shipper_account;
$shipment->Billing->ShippingPaymentType = 'S';
$shipment->Billing->BillingAccountNumber = $order->auth->billing_account;

$contact_name = $order->address->shipping->first_name . ' ' . $order->address->shipping->last_name;
$shipment->Consignee->CompanyName = $order->address->shipping->organisation ?? $contact_name;
$shipment->Consignee->Contact->PersonName = $contact_name;
$shipment->Consignee->AddressLine1 = substr($order->address->shipping->address1, 0, 35);
if (!empty($order->address->shipping->address2)) {
    $shipment->Consignee->AddressLine2 = substr($order->address->shipping->address2, 0, 35);
}
$shipment->Consignee->City = $order->address->shipping->city;
$shipment->Consignee->PostalCode = $order->address->shipping->postcode;
if (!empty($order->address->shipping->state)) {
    $shipment->Consignee->Division = $order->address->shipping->state ?? '';
    $shipment->Consignee->DivisionCode = $order->address->shipping->state ?? '';
}

if (!empty($order->address->shipping->tax_id)) {
    $shipment->Consignee->FederalTaxId = $order->address->shipping->tax_id;
}

$shipment->Consignee->CountryCode = $order->address->shipping->country;
$shipment->Consignee->CountryName = Country::getNameFromCode($order->address->shipping->country);
$shipment->Consignee->Contact->PhoneNumber = $order->info->contact_no;
$shipment->Consignee->Contact->Email = $order->info->email;
$shipment->Consignee->Contact->PhoneExtension = '';
$shipment->Consignee->Contact->FaxNumber = '';
$shipment->Consignee->Contact->Telex = '';
$shipment->Consignee->Contact->MobilePhoneNumber = $order->info->contact_no;
$shipment->RegionCode = Country::getDHLRegionCode($order->address->shipping->country);
$shipment->Shipper->BusinessPartyTypeCode = 'DC';

$order_value = $this->getOrderValue($order);
$shipment->Dutiable->DeclaredValue = number_format($order_value, 2, '.', '');
$shipment->Dutiable->DeclaredCurrency = 'GBP';
$shipment->Dutiable->TermsOfTrade = $this->termsOfTrade($order);

$special_service_type = $this->getSpecialServiceType($order);

if ($special_service_type) {
    $special_service = new SpecialService();
    $special_service->SpecialServiceType = $special_service_type;
    $shipment->SpecialService = $special_service;
}
// DocImage is required for paperless
if ($special_service_type === 'WY') {
    $image = new DocImage();
    $image->Type = 'INV';
    $image->Image = $order->invoice;
    $image->ImageFormat = 'PDF';
    $shipment->addDocImage($image);
}
$shipment->Shipper->ShipperID = $order->auth->shipper_id;
$shipment->Shipper->RegisteredAccount = $order->auth->shipper_account_number;
$shipment->Shipper->CompanyName = $order->address->collection->organisation;
$shipment->Shipper->AddressLine1 = $order->address->collection->address1;
if (!empty($order->address->collection->address2)) {
    $shipment->Shipper->AddressLine2 = $order->address->collection->address2;
}
$shipment->Shipper->City = $order->address->collection->city;
if ($order->address->collection->country === 'GB') {
    $shipment->Shipper->PostalCode = $this->normalizeUkPostcode($order->address->collection->postcode);
} else {
    $shipment->Shipper->PostalCode = $order->address->collection->postcode;
}
$shipment->Shipper->CountryCode = $order->address->collection->country;
$shipment->Shipper->CountryName = Country::getNameFromCode($order->address->collection->country);

$shipment->Shipper->Contact->PersonName = $order->address->collection->contact_name;
$shipment->Shipper->Contact->PhoneNumber = $order->address->collection->contact_phone;
$shipment->Shipper->Contact->Email = $order->address->collection->contact_email;
$shipment->Shipper->Contact->PhoneExtension = '';
$shipment->Shipper->Contact->FaxNumber = '';
$shipment->Shipper->Contact->Telex = '';
$shipment->Shipper->Contact->MobilePhoneNumber = $order->address->collection->contact_phone;

if (!empty($order->courier->registration_number)) {
    $registration_number = new RegistrationNumber();
    $registration_number->Number = $order->courier->registration_number;
    $registration_number->NumberTypeCode = $order->courier->registration_number_type;
    $registration_number->NumberIssuerCountryCode = $order->courier->registration_number_country;
    $shipment->Shipper->addRegistrationNumber($registration_number);
}
$shipment->Shipper->BusinessPartyTypeCode = 'BU';

$delivery_service = $this->getDeliveryService($client, $order);
$shipment->ShipmentDetails->GlobalProductCode = $delivery_service->code;
$shipment->ShipmentDetails->LocalProductCode = $delivery_service->format;

$shipment->ShipmentDetails->Contents = $order->description ?? '';
$shipment->ShipmentDetails->CurrencyCode = 'GBP';
$shipment->ShipmentDetails->WeightUnit = 'K';
$shipment->ShipmentDetails->Date = Carbon::now()->format('Y-m-d');
$shipment->ShipmentDetails->DimensionUnit = 'C';
$shipment->ShipmentDetails->InsuredAmount = !empty($order->insurance_total) ? $order->insurance_total : 0;
$shipment->ShipmentDetails->PackageType = $order->package_type ?? 'PA';
$shipment->ShipmentDetails->IsDutiable = $this->is_dutiable_shipment ? 'Y' : 'N';
// paperless needs IsDutiable set to 'Y'
if ($special_service_type === 'WY') {
    $shipment->ShipmentDetails->IsDutiable = 'Y';
}
$shipment->ShipmentDetails->AdditionalProtection = new AdditionalProtection();
$shipment->ShipmentDetails->CustData = $contact_name;

$shipment->DHLInvoiceType = 'CMI';
if (!empty($order->invoice_date)) {
    $shipment->ExportDeclaration->InvoiceDate = $order->invoice_date;
}
if (!empty($order->invoice_number)) {
    $shipment->ExportDeclaration->InvoiceNumber = (string)$order->invoice_number;
}
$shipment->ExportDeclaration->ExportReason = 'Sales';
$shipment->ExportDeclaration->ExportReasonCode = 'P';
$shipment->ExportDeclaration->ShipmentPurpose = 'PERSONAL';
$shipment->ExportDeclaration->InvoiceTotalGrossWeight = collect($packages)->sum('weight');
$shipment->ExportDeclaration->PlaceOfIncoterm = $order->address->shipping->city;

foreach ($order->items as $index => $item) {
    $export_item = new ExportLineItem();
    $export_item->LineNumber = $index + 1;
    $export_item->Value = $item->price;
    $export_item->Quantity = $item->quantity;
    $export_item->QuantityUnit = 'PCS';
    $weight = new Weight();
    $weight->Weight = $item->weight;
    $weight->WeightUnit = 'K';
    $export_item->Weight = $weight;
    $weight = new GrossWeight();
    $weight->Weight = $item->weight;
    $weight->WeightUnit = 'K';
    $export_item->GrossWeight = $weight;
    $export_item->Description = $item->name;

    if (!empty($item->manufacture_country)) {
        $export_item->ManufactureCountryCode = $item->manufacture_country;
    }
    if (!empty($item->commodity_code)) {
        $export_item->CommodityCode = $item->commodity_code;
    }
    if (!empty($item->import_commodity_code)) {
        $export_item->ImportCommodityCode = $item->import_commodity_code;
    }

    $shipment->ExportDeclaration->addExportLineItem($export_item);
}

// Information about Packages in shipment
foreach ($packages as $package_id => $package) {
    $piece = new Piece();
    $piece->PieceID = $client->account . $order->id . $package_id;
    $piece->PackageType = $order->package_type ?? 'PA';
    $piece->Weight = $package['weight'];
    $piece->Width = $package['width'];
    $piece->Height = $package['height'];
    $piece->Depth = $package['length'];
    $piece->PieceContents = $package['contents'];
    $shipment->ShipmentDetails->addPiece($piece);
}

$shipment->EProcShip = 'N';

switch (strtolower($order->courier->label_format)) {
    case 'zpl':
        $shipment->LabelImageFormat = 'ZPL2';
        $shipment->Label->LabelTemplate = '8X4_thermal';
        break;
    case 'pdf':
    default:
        $shipment->LabelImageFormat = 'PDF';
        $shipment->Label->LabelTemplate = '8X4_PDF';
}

$api_client = new Web($this->getEnvironment());
$xml_response = $api_client->call($shipment);
```

If you need XML request for the DHL certification you can obtain by calling the following code 
```php
$request_xml = $shipment->toXml();
```