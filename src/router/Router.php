<?php

namespace ersnick\Csu2024;

class Router {

    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require 'routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run() {
        if ($this->match()) {
            $controllerPath = 'src\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($controllerPath)) {
                $action = $this->params['action'].'Action';
                if (method_exists($controllerPath, $action)) {
                    $controller = new $controllerPath;
                    $controller->$action();
                } else {
                    echo 'Кто такой ваш '.$action;
                }
            } else {
                echo 'Сука где '.$controllerPath;
            }
        } else {
            header("HTTP/1.0 404 Not Found");
            include('404NotFound.html');
        }
    }
}