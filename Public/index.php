<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\Database;

$database = new Database();

echo "Database connection established successfully.";

$router = new Router();

require_once __DIR__ . '/../App/Router.php';

$router->dispatch();