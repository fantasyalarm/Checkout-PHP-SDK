<?php


namespace PayPalCheckoutSdk\Billing;


use PayPalHttp\HttpRequest;

class PlansCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/billing/plans?", "POST");
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
