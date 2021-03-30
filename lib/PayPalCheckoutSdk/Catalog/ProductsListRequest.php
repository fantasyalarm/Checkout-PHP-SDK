<?php


namespace PayPalCheckoutSdk\Billing;


use PayPalHttp\HttpRequest;

class ProductsListRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/catalogs/products?", "GET");

        $this->headers["Content-Type"] = "application/json";
    }
}
