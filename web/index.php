<?php

use ersnick\Csu2024\App;
use ersnick\Csu2024\Router;

require dirname(__DIR__) . '/vendor/autoload.php';

$router = new Router;
$router->run();
//$app = new App();
//echo $app->run();