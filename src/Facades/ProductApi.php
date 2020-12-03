<?php

namespace Joseaneto\GoogleMerchantApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Joseaneto\GoogleMerchantApi\Classes\ProductsApi
 */
class ProductApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'productApi';
    }
}
