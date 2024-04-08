<?php

namespace AlexaLeonid\Exceptions;

class HttpNotFoundException extends HttpException
{
    protected $code = 404;

    protected $message = "404 Not Found: the server cannot find the requested resource.";

}