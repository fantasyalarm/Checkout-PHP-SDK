<?php


namespace PayPalCheckoutSdk\Billing;


use PayPalHttp\HttpRequest;

class PlansListRequest extends HttpRequest
{
    function __construct($orderId)
    {
        parent::__construct("/v1/billing/plans?", "GET");

        $this->headers["Content-Type"] = "application/json";
    }

    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
