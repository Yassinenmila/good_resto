<?php 
use App\Controller\HomeController;
use App\Controller\AuthController;


$router->get('/', [HomeController::class, 'index']);

$router ->get('/login', [AuthController::class, 'login']);