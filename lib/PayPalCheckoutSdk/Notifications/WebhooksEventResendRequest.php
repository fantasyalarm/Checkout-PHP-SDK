<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksEventResendRequest extends HttpRequest
{
    function __construct($id)
    {
        parent::__construct("/v1/notifications/webhooks-events/{event_id}/resend?", "POST");
        $this->path = str_replace("{event_id}", urlencode($id), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
