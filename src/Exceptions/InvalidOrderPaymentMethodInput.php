<?php

namespace Joseaneto\GoogleMerchantApi\Exceptions;

class InvalidOrderPaymentMethodInput extends \Exception
{
    protected $message = 'Joseaneto\GoogleMerchantApi: The order payment method type is invalid.';
}