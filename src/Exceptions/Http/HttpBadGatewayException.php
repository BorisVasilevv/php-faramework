<?php

namespace AlexaLeonid\Exceptions\Http;


class HttpBadGatewayException extends HttpException
{
    protected $code = 502;

    protected $message = "502 Bad Gateway: the server, while acting as a gateway or proxy, received an invalid response from the upstream server.";

    protected string $view = "Html/502BadGateway.html";
}