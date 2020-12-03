<?php

namespace Joseaneto\GoogleMerchantApi\Exceptions;

class InvalidOrderInput extends \Exception
{
    protected $message = 'Joseaneto\GoogleMerchantApi: The order content type is invalid.';
}