<?php

namespace AlexaLeonid\Exceptions;

class HttpBadRequestException extends HttpException
{
    protected $code = 400;

    protected $message = "400 Bad request: server cannot or will not process the request due to something that is perceived to be a client error";

}