<?php

namespace BorisVasilevv\Csu2024;

use ersnick\Router\Router;
use BorisVasilevv\Repository\ComponentContainer;

class App
{
    private array $params;
    private $parents;
    public ComponentContainer $container;
    public function init()
    {
        if(!array_key_exists("components", $this->params))
        {
            throw new \Exception("Components not set");
        }

        $this->parents = new ComponentContainer(
            $this->params["components"]
        );
    }


//    public function run(): string
//    {
//        set_error_handler([new ErrorHandler(), "HttpErrorHandler"]);
//
//        return 'It`s a life!';
//        $router = new Router((array)0);
//        $router->run();
//        return "";
//    }
}