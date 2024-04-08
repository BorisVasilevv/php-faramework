<?php

namespace AlexaLeonid\Exceptions;

class HttpServiceUnavailableException extends HttpException
{
    protected $code = 503;

    protected $message = "503 Service Unavailable:  the server is not ready to handle the request.";


}