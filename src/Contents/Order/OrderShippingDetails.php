<?php

namespace GUILLMZ\GoogleMerchantApi\Contents\Order;

use GUILLMZ\GoogleMerchantApi\Contents\BaseContent;
use GUILLMZ\GoogleMerchantApi\Contents\Price;
use Carbon\Carbon;

class OrderShippingDetails extends BaseContent
{

    /**
     * Names of alloed attributes
     *
     * @var string  type
     * @var object  method
     * @var string  shipByDate
     * @var string  deliverByDate
     *
     * @var array
     */
    protected $allowed_attributes = [
        'type', 'method', 'shipByDate', 'deliverByDate',
    ];

    /**
     * Mutate the shipping details
     *
     * @return \Carbon\Carbon|null
     */
    public function getShipByDate(){
        if(!$this->attributes['shipByDate']){
            return $this->attributes['shipByDate'];
        }

        return new Carbon($this->attributes['shipByDate']);
    }

    /**
     * Mutate the shipping details
     *
     * @return \Carbon\Carbon|null
     */
    public function getDeliverByDate(){
        if(!$this->attributes['deliverByDate']){
            return $this->attributes['deliverByDate'];
        }

        return new Carbon($this->attributes['deliverByDate']);
    }

}
