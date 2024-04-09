<?php

namespace AlexaLeonid\Exceptions\Http;

class HttpNotFoundException extends HttpException
{
    protected $code = 404;

    protected $message = "404 Not Found: the server cannot find the requested resource.";
    protected string $view = "Html/404NotFound.html";
}