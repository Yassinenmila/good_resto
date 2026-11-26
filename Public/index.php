<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

require_once __DIR__ . '/../App/Router.php';

$router->dispatch();