    
## AUTHORS & CONTACT


Al-Fallouji Bashar 
    - bashar@alfallouji.com

    
## DOCUMENTATION & DOWNLOAD


Latest version is available on github at :
    - http://github.com/alfallouji/DHL-API/


## LICENSE


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


## DESCRIPTION


This library is a PHP Oriented Object client for the DHL XML Services. DHL XML Services is an online web services integration capability that provides DHL’s service availability, transit times, rates, shipment and courier pickup booking along with shipment tracking from over 140 countries around the world. Using DHL’s XML Services, customers can incorporate DHL shipping functionality into their websites, customer service applications or order processing systems.


## USAGE

This client does not rely or depend on any framework and it should be fairly easy to integrate with your own code. You can use the autloader that is provided or your own autoloading mechanism.

The sample folder contains some example on how to use the client.

In order to have the sample working, you will need to create a DHL staging account and then you need to edit the config/config.php file accordingly. The samples are loading it.

```
return array(
    'id' => 'Your_DHL_ID',
    'pass' => 'Your_DHL_Password',
);
```

