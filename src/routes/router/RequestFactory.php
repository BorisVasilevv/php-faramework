<?php


namespace BorisVasilevv\router\router;

use Psr\Http\Message\RequestFactoryInterface;

class RequestFactory implements RequestFactoryInterface
{

    public function createRequest(string $method, $uri): Request
    {
        // TODO: Implement createRequest() method.
    }
}