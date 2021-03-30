<?php


namespace PayPalCheckoutSdk\Billing;


use PayPalHttp\HttpRequest;

class ProductsUpdateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/catalogs/products?", "PATCH");

        $this->headers["Content-Type"] = "application/json";
    }
}
