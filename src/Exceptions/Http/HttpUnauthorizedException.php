<?php

namespace AlexaLeonid\Exceptions\Http;

class HttpUnauthorizedException extends HttpException
{
    protected $code = 401;

    protected $message = "401 Unauthorized: the client request has not been completed because it lacks valid authentication credentials for the requested resource.";
    protected string $view = "Html/401Unauthorized.html";
}