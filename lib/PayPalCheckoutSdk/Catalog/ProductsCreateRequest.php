<?php


namespace PayPalCheckoutSdk\Catalog;


use PayPalHttp\HttpRequest;

class ProductsCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/catalogs/products?", "POST");

        $this->headers["Content-Type"] = "application/json";
    }

    public function payPalRequestId($payPalRequestId)
    {
        $this->headers["PayPal-Request-Id"] = $payPalRequestId;
    }

    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
