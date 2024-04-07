<?php

namespace AlexaLeonid\Exceptions;

class HttpForbiddenException extends HttpException
{
    protected $code = 403;

    protected $message = "403 Forbidden: status code indicates that the server understands the request but refuses to authorize it";

}