<?php

namespace AlexaLeonid\Handlers;

use AlexaLeonid\Exceptions\HttpBadGatewayException;
use AlexaLeonid\Exceptions\HttpBadRequestException;
use AlexaLeonid\Exceptions\HttpException;
use AlexaLeonid\Exceptions\HttpForbiddenException;
use AlexaLeonid\Exceptions\HttpInternalServerErrorException;
use AlexaLeonid\Exceptions\HttpNotFoundException;
use AlexaLeonid\Exceptions\HttpServiceUnavailableException;
use AlexaLeonid\Exceptions\HttpUnauthorizedException;
use Exception;

class ErrorHandler
{
    /**
     * @throws HttpInternalServerErrorException
     * @throws HttpBadRequestException
     * @throws HttpBadGatewayException
     * @throws HttpForbiddenException
     * @throws HttpServiceUnavailableException
     * @throws HttpNotFoundException
     * @throws HttpUnauthorizedException
     * @throws Exception
     */
    public function HttpErrorHandler($errno, $errstr, $errfile, $errline)
    {
        throw match ($errno) {
            502 => new HttpBadGatewayException($errstr),
            400 => new HttpBadRequestException($errstr),
            403 => new HttpForbiddenException($errstr),
            500 => new HttpInternalServerErrorException($errstr),
            404 => new HttpNotFoundException($errstr),
            503 => new HttpServiceUnavailableException($errstr),
            401 => new HttpUnauthorizedException($errstr),
            default => new Exception($errstr),
        };

      //  return true;
    }
}