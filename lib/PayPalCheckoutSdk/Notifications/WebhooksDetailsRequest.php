<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksDetailsRequest extends HttpRequest
{
    function __construct($id)
    {
        parent::__construct("/v1/notifications/webhooks/{webhook_id}?", "GET");
        $this->path = str_replace("{webhook_id}", urlencode($id), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
