<?php


namespace PayPalCheckoutSdk\Notifications;


use PayPalHttp\HttpRequest;

class WebhooksListRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/notifications/webhooks?", "GET");

        $this->headers["Content-Type"] = "application/json";
    }

    public function anchor($anchor)
    {
        if(in_array($anchor,array('APPLICATION','ACCOUNT'))){
            $this->path = $this->path.'anchor_type='.$anchor;
        }
    }
}
