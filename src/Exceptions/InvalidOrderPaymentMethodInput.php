<?php

namespace GUILLMZ\GoogleMerchantApi\Exceptions;

class InvalidOrderPaymentMethodInput extends \Exception
{
    protected $message = 'GUILLMZ\GoogleMerchantApi: The order payment method type is invalid.';
}