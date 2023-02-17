<?php
const ROOT_PATH = "/Assigment/public/";
use App\Controllers\CategoriesController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\TableController;
use App\Controllers\UserController;
use App\Router;
use App\Request;

require_once __DIR__ . "/../vendor/autoload.php";
$router= new Router;
//user
    //404
Router::get('/',[HomeController::class,'index']);
//trang chú user
Router::get('/home', [HomeController::class, 'index']);
//login
Router::get('/login',[UserController::class,'loginpage']);
//checkuser
// Router::post('/login',[UserController::class,'check_User']);
//register
Router::get('/register',[UserController::class,'registers']);
//forgot
Router::get('/forgot',[UserController::class,'forgot']);
//home-admin
Router::get('/home-admin',[HomeController::class,'home_admin']);
//table-user
Router::get('/user-admin',[UserController::class,'listUser']);
Router::get('/update-user',[UserController::class,'updateUser']);
Router::post('/update-user',[UserController::class,'userUpdate']);
Router::get('/deleteus',[UserController::class,'deleteUser']);

//table-product
Router::get('/product-admin',[ProductController::class,'index']);
Router::get('/update-product',[ProductController::class,'updatepro']);
Router::post('/update-product',[ProductController::class,'updateProduct']);
// Router::get('/delete-product',[ProductController::class,'deleteProduct']);
// table-categories
Router::get('/categories-admin',[CategoriesController::class,'list_cate']);
// Router::get('/update-categories',[CategoriesController::class,'']);
// Router::post('/update-categories',[CategoriesController::class,'']);
//table-admin
Router::get('/table-admin',[TableController::class,'index']);
//table-profile
Router::get('/user-profile',[UserController::class,'userProfile']);
$router->resolve();
?>