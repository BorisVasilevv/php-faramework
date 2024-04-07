<?php

use vvelless\Csu2024\App;


require dirname(__DIR__) . '/vendor/autoload.php';

$app = new App();
echo $app->run();