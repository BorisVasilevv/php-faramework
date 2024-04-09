<?php

namespace AlexaLeonid\Exceptions\Http;

class HttpServiceUnavailableException extends HttpException
{
    protected $code = 503;

    protected $message = "503 Service Unavailable:  the server is not ready to handle the request.";

    protected string $view = "Html/503ServiceUnavailable.html";
}