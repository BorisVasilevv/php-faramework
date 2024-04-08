<?php

namespace BorisVasilevv\Csu2024;

use AlexaLeonid\Exceptions\Http\HttpNotFoundException;
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
        } catch (HttpNotFoundException) {
//            http_response_code(404);

            //echo View::make('error/404');
        }
    }

}