Example request:
```php
    $router = new RouteRequest();
    $router->MessageTime = Carbon::now()->format(Carbon::ATOM);
    $router->MessageReference = 'reference_28_to_30_chars';
    $router->SiteID = 'SITE_ID';
    $router->Password = 'PASSWORD';
    $router->OriginCountryCode = 'GB';
    $router->RequestType = 'O';

    $router->Address1 = 'mtc media, Unit 35';
    $router->Address2 = 'Shed 26, City Quay';
    $router->Address3 = '';
    $router->PostalCode = 'DD1 3JA';
    $router->City = 'Dundee';
    $router->Division = '';
    $router->CountryCode = 'GB';
    $router->RegionCode = 'EU';
    $router->CountryName = 'United Kingdom';

    $client = new Web('staging/production');
    $xml_response = $client->call($router);
```

If you need XML request for the DHL certification you can obtain by calling the following code 
```php
$request_xml = $router->toXml();
```