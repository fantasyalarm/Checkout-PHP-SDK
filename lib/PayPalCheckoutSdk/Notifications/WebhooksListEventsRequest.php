<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksListEventsRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1//notifications/webhooks-events?", "GET");

        $this->headers["Content-Type"] = "application/json";
    }
}
