<?php

namespace vvelless\Csu2024;


use AlexaLeonid\Handlers\ErrorHandler;
use BorisVasilevv\repository\Container;
use ersnick\Router\Router;
use BorisVasilevv\repository\ComponentContainer;

class App
{
    private array $params;
    private $parents;
    public Container $container;
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