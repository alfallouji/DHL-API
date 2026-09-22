<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ItemReference Request model for DHL API
 *
 * Used to submit Export Declaration Line Item References, including the
 * 2026 EU Customs Reform (EUCR) Product Identifiers:
 * - ABW: Merchant Product Identifier
 * - MF: Non-Standardised Manufacturer Product Identifier
 * - SRV: Standardised Manufacturer Product Identifier (GTIN/MPN/EAN)
 */
class ItemReference extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ItemReferenceType' => [
            'type' => 'ItemReferenceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export Declaration line item Reference Type',
            'minLength' => '2',
            'maxLength' => '3',
        ],
        'ItemReferenceNumber' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export Declaration line item Reference Number',
            'maxLength' => '35',
        ],
    ];
}
