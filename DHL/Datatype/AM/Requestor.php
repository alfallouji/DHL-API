<?php
    /**
     * Note : Code is released under the GNU LGPL
     *
     * Please do not change the header of this file
     *
     * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
     * Lesser General Public License as published by the Free Software Foundation; either version 2 of
     * the License, or (at your option) any later version.
     *
     * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
     * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
     *
     * See the GNU Lesser General Public License for more details.
     */


    namespace DHL\Datatype\AM;

    use DHL\Datatype\Base;

    class Requestor extends Base
    {
        /**
         * Is this object a subobject
         * @var boolean
         */
        protected $_isSubobject = true;

        /**
         * Parameters of the datatype
         * @var array
         */
        protected $_params = array(
            'AccountType' => array(
                'type' => 'AccountType',
                'required' => true,
                'subobject' => false,
            ),
            'AccountNumber' => array(
                'type' => 'AccountNumber',
                'required' => true,
                'subobject' => false,
                'maxLength' => '12',
            ),
            'RequestorContact' => array(
                'type' => 'RequestorContact',
                'required' => false,
                'subobject' => true,
            ),
            'CompanyName' => array(
                'type' => 'CompanyNameValidator',
                'required' => false,
                'subobject' => false,
                'comment' => 'Name of company / business',
                'maxLength' => '60',
                'minLength' => '2',
            ),
            'Address1' => array(
                'type' => 'string',
                'required' => true,
                'subobject' => false,
                'comment' => 'Address Line',
                'maxLength' => '45',
            ),
            'Address2' => array(
                'type' => 'string',
                'required' => false,
                'subobject' => false,
                'comment' => 'Address Line',
                'maxLength' => '45',
            ),
            'Address3' => array(
                'type' => 'string',
                'required' => false,
                'subobject' => false,
                'comment' => 'Address Line',
                'maxLength' => '45',
            ),
            'City' => array(
                'type' => 'City',
                'required' => true,
                'subobject' => false,
                'comment' => 'City name',
                'maxLength' => '35',
            ),
            'CountryCode' => array(
                'type' => 'CountryCode',
                'required' => true,
                'subobject' => false,
                'comment' => 'ISO country codes',
                'length' => '2',
            ),
            'DivisionName' => array(
                'type' => 'Division',
                'required' => false,
                'subobject' => false,
                'comment' => 'State',
                'maxLength' => '35',
            ),
            'PostalCode' => array(
                'type' => 'PostalCode',
                'required' => false,
                'subobject' => false,
                'comment' => 'Full postal/zip code for address',
            ),
        );
    }
