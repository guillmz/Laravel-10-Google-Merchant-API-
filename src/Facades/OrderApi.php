<?php

namespace GUILLMZ\GoogleMerchantApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GUILLMZ\GoogleMerchantApi\Classes\ProductsApi
 */
class OrderApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'orderApi';
    }
}
