<?php

namespace GUILLMZ\GoogleMerchantApi\Exceptions;

class InvalidProductShippingInput extends \Exception
{
    protected $message = 'GUILLMZ\GoogleMerchantApi: The product shipping content type is invalid.';
}