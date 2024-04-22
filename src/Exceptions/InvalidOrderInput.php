<?php

namespace GUILLMZ\GoogleMerchantApi\Exceptions;

class InvalidOrderInput extends \Exception
{
    protected $message = 'GUILLMZ\GoogleMerchantApi: The order content type is invalid.';
}