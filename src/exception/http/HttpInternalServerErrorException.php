<?php

namespace AlexaLeonid\Exceptions;

class HttpInternalServerErrorException extends HttpException
{
    protected $code = 500;

    protected $message = "500 Internal Server Error: server encountered an unexpected condition that prevented it from fulfilling the request.";


}