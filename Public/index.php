<?php
session_start();

require __DIR__."/../vendor/autoload.php";

use App\core\Router;

$router = new Router();



$router->dispatch();

