<?php


    namespace DHL\Datatype\AM;
    use DHL\Datatype\Base;


    class Pickup extends Base
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
            'PickupDate' => array(
                'type' => 'date',
                'required' => true,
                'subobject' => false,
            ),
            'PickupTypeCode' => array(
                'type' => 'string',
                'required' => true,
                'subobject' => false,
                'length' => '1',
                'enumeration' => 'S,A'
            ),
            'ReadyByTime' => array(
                'type' => 'string', //'TimeHM',
                'required' => true,
                'subobject' => false,
                'length' => '5',
            ),
            'CloseTime' => array(
                'type' => 'string', //'TimeHM',
                'required' => true,
                'subobject' => false,
                'length' => '5',
            ),
            'AfterHoursClosingTime' => array(
                'type' => 'string', //'TimeHM',
                'required' => false,
                'subobject' => false,
                'length' => '5',
            ),
            'AfterHoursLocation' => array(
                'type' => 'string',
                'required' => false,
                'subobject' => false,
                'maxLength' => 35,
            ),
            'Pieces' => array(
                'type' => 'number',
                'required' => false,
                'subobject' => false,
                'minInclusive' => 1,
                'maxInclusive' => 999,
            ),
            'RemotePickupFlag' => array(
                'type' => 'YesNo',
                'required' => false,
                'subobject' => false,
                'comment' => 'Boolean flag',
                'length' => '1',
                'enumeration' => 'Y,N',
            ),
            'weight' => array(
                'type' => 'Weight',
                'required' => false,
                'subobject' => true,
            ),
            'SpecialInstructions' => array(
                'type' => 'SpecialInstructions',
                'required' => false,
                'subobject' => false,
                'maxLength' =>80
            ),
            'Remarks' => array(
                'type' => 'string',
                'required' => false,
                'subobject' => false,
                'maxLength' => 2048,
            ),
        );
    }
