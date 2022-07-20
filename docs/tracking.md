Example request:
```php
$tracking = new KnownTrackingRequest();
$tracking->SiteID = 'ACCOUNT_NUIMBER';
$tracking->Password = 'PASSWORD';
$tracking->MessageReference = 'reference_28_to_32_chars';
$tracking->MessageTime = Carbon::now()->format(Carbon::ATOM);
$tracking->LanguageCode = 'en';
$tracking->AWBNumber = $tracking_number;
$tracking->LevelOfDetails = 'ALL_CHECK_POINTS';
$tracking->PiecesEnabled = 'S';

$client = new Web($this->getEnvironment());
$xml_response = $client->call($tracking);
```

If you need XML request for the DHL certification you can obtain by calling the following code 
```php
$request_xml = $tracking->toXml();
```
