<?php

use BorisVasilevv\Csu2024\App;
use ersnick\Router\Router;

require dirname(__DIR__) . '/vendor/autoload.php';

$router = new Router;
$router->run();
//$app = new App();
//echo $app->run();