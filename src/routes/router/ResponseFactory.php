<?php


namespace BorisVasilevv\router\router;

use Psr\Http\Message\ResponseFactoryInterface;

class ResponseFactory implements ResponseFactoryInterface
{
    public function createResponse(int $code = 200, string $reasonPhrase = ''): Response
    {
        // TODO: Implement createResponse() method.
    }
}