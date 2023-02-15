<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";
$router= new Router;
//user
Router::get('/home', [HomeController::class, 'index']);
Router::get('/login',[UserController::class,'loginpage']);
Router::post('/login',[UserController::class,'checkUser']);
Router::get('/register',[UserController::class,'registers']);
Router::get('/forgot',[UserController::class,'forgot']);
Router::get('/user',[UserController::class,'listUser']);
$router->resolve();
//admin
Router::get('');
?>