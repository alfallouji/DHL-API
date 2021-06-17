Example request:
```php
$sample = new GetQuote();
$sample->SiteID = 'ACCOUNT_NUMBER';
$sample->Password = 'PASSWORD';
$sample->MessageTime = Carbon::now()->format(Carbon::ATOM);
$sample->MessageReference = 'reference_28_to_32_chars';

$sample->BkgDetails->Date = date('Y-m-d');
$sample->BkgDetails->PaymentCountryCode = 'GB';
$sample->BkgDetails->DimensionUnit = 'CM';
$sample->BkgDetails->WeightUnit = 'KG';
$sample->BkgDetails->ReadyTime = 'PT10H21M';
$sample->BkgDetails->ReadyTimeGMTOffset = '+01:00';
$sample->BkgDetails->PaymentAccountNumber = 'SHIPPER_ACCOUNT_NUMBER';

foreach ($packages as $index => $package) {
    $piece = new PieceType();
    $piece->PieceID = $index + 1;
    $piece->Height = $package['height'];
    $piece->Depth = $package['length'];
    $piece->Width = $package['width'];
    $piece->Weight = $package['weight'];
    $sample->BkgDetails->addPiece($piece);
}

$sample->From->CountryCode = 'GB';
$sample->From->Postalcode = 'DD13JA';

$sample->To->City = $address->city;
$sample->To->Postalcode = $address->postcode;
$sample->To->CountryCode = $address->country;
$sample->BkgDetails->IsDutiable = Country::isEu($address->country) ? 'N' : 'Y';

if (!Country::isEu($address->country)) {
    $order_value = $order->order_cost - $order->delivery_cost > 0 ? $order->order_cost - $order->delivery_cost : 1.0;
    $sample->Dutiable->DeclaredValue = $order_value;
    $sample->Dutiable->DeclaredCurrency = 'GBP';
}

$client = new Web($this->getEnvironment());
$xml_response = $client->call($sample);
```

If you need XML request for the DHL certification you can obtain by calling the following code 
```php
$request_xml = $sample->toXml();
```