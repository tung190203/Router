<?php

use App\Controllers\HomeController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";
$router= new Router;
Router::get('/home', [HomeController::class, 'index']);
Router::get('/login',[HomeController::class,'loginUser']);
$router->resolve();
?>