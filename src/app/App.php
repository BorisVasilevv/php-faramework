<?php

namespace BorisVasilevv\Csu2024;



use BorisVasilevv\router\Router;
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

    public function run(): string
    {
//        return 'It`s a life!';
<<<<<<< Updated upstream
        $router = new Router((array)0);
        $router->run();
        return "";
    }
=======
//        $Router = new Router((array)0);
//        $Router->run();
//        return "";
//    }
>>>>>>> Stashed changes
}