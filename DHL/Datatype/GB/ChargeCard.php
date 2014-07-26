<?php
namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ChargeCard Request model for DHL API
 */
class ChargeCard extends Base
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
        'ChargeCardNo' => array(
            'type' => 'ChargeCardNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card number',
            'minInclusive' => '1000000000000',
            'maxInclusive' => '9999999999999999',
            'pattern' => '\d{13,16}',
        ), 
        'ChargeCardType' => array(
            'type' => 'ChargeCardType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card issuer type',
            'length' => '2',
            'enumeration' => 'AM,DC,DI,MC,VI',
        ), 
        'ChargeCardConfNo' => array(
            'type' => 'ChargeCardConfNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card confirmation number',
            'pattern' => '\d{0,6}',
        ), 
        'ChargeCardExpiryDate' => array(
            'type' => 'ChargeCardExpDateValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card expiration date',
            'pattern' => '(0[1-9]|1[0-2])\d{1}[0-9]',
        ), 
    );
}
