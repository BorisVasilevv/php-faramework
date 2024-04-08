<?php

namespace AlexaLeonid\Exceptions;

class HttpUnauthorizedException extends HttpException
{
    protected $code = 401;

    protected $message = "401 Unauthorized: the client request has not been completed because it lacks valid authentication credentials for the requested resource.";

}