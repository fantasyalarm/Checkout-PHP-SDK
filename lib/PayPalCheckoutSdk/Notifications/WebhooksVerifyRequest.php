<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksVerifyRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/notifications/verify-webhook-signature?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }
}
