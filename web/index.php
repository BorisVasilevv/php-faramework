<?php

use BorisVasilevv\Csu2024\App;
use ersnick\Router\Router;
use BorisVasilevv\Repository\ComponentContainer;
use vvelless\controller\SampleController;

require dirname(__DIR__) . '/vendor/autoload.php';

//$router = new Router;
//$router->run();
//$app = new App();
//echo $app->run();

$container = new ComponentContainer();
$router    = new Router($container);

$router
    ->get('/', [SampleController::class,'index'])
    ->get('/login', [SampleController::class,'login'])
    ->post('/store', [SampleController::class,'store']);

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]
))->run();