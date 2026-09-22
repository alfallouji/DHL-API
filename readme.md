# DHL API 

* [Installation](#installation)
* [Usage](#usage)

## Installation

Package should be installed through composer:

```bash
composer require mtcmedia/dhl-api 
```

Package requires a php min version of 7.1, however it has has been developed and tested on php 7.2.*  

## Usage

You will need Sandbox account to start setup. 
You can request your unique credentials by registering for the XML Portal  https://xmlportal.dhl.com/register

DHL Documentation: http://xmlpitest-ea.dhl.com/toolkit/Toolkit.zip

DHL XML Services Test Harness: https://xmlpi-validation.dhl.com/serviceval/jsps/main/Main_menu.jsp

DHL XML Services Test server for customer certification: https://xmlpitest-ea.dhl.com/XMLShippingServlet

[Quote Requests (v6.1)](docs/quote.md)

[Route Requests (v1.0)](docs/route.md)

[Shipment Requests (v10.0)](docs/shipment.md)

[Pickup Request (v1.0)](docs/pickup.md)

[Tracking Requests (v1.0)](docs/tracking.md)

# Changelog

v1.x - uses Shipment API v6.2

v2.x - uses Shipment API v10.0


## Contributing

Please see [CONTRIBUTING](contributing.md) for details.

### Security

If you discover any security-related issues, please email [opensource@mtcmedia.co.uk](mailto:opensource@mtcmedia.co.uk) instead of using the issue tracker.

## License

The package is provided under MIT License. Please see [License File](license.md) for more information.