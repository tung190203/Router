<?php

use App\Controllers\CategoriesController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\TableController;
use App\Controllers\UserController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";
$router= new Router;
//user
    
Router::get('/',[HomeController::class,'index']);
Router::get('/home', [HomeController::class, 'index']);
Router::get('/login',[UserController::class,'loginpage']);
Router::post('/login',[UserController::class,'checkUser']);
Router::get('/register',[UserController::class,'registers']);
Router::get('/forgot',[UserController::class,'forgot']);


//admin
Router::get('/home-admin',[HomeController::class,'home_admin']);
Router::get('/user-admin',[UserController::class,'listUser']);
Router::get('/product-admin',[ProductController::class,'index']);
Router::get('/categories-admin',[CategoriesController::class,'list_cate']);
Router::get('/table-admin',[TableController::class,'index']);
Router::get('/user-profile',[UserController::class,'userProfile']);
$router->resolve();
?>