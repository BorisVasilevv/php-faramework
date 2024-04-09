<?php

namespace BorisVasilevv\Csu2024;

use AlexaLeonid\Exceptions\Http\HttpBadGatewayException;
use AlexaLeonid\Exceptions\Http\HttpBadRequestException;
use AlexaLeonid\Exceptions\Http\HttpForbiddenException;
use AlexaLeonid\Exceptions\Http\HttpInternalServerErrorException;
use AlexaLeonid\Exceptions\Http\HttpNotFoundException;
use AlexaLeonid\Exceptions\Http\HttpServiceUnavailableException;
use AlexaLeonid\Exceptions\Http\HttpUnauthorizedException;
use ersnick\Router\Router;
use BorisVasilevv\Repository\ComponentContainer;

class App
{


    public function __construct(protected Router $router, protected array $request)
    {

    }

    public function run()
    {

        try {
            echo $this->router->resolve($this->request['uri'], strtolower($this->request['method']));
        } catch (HttpNotFoundException $e) {
//            http_response_code(404);
            $e->getView();
            //echo View::make('error/404');
        }
    }

}