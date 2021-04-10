<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksListEventsTypesRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1//notifications/webhooks-event-types?", "GET");

        $this->headers["Content-Type"] = "application/json";
    }
}
