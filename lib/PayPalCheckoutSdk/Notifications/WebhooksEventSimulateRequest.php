<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksEventSimulateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/notifications/simulate-event?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }
}
