<?php
session_start();
const ROOT_PATH = "/Assigment/public/";

use App\Controllers\BookingController;
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
//trang chú user
Router::get('/home', [HomeController::class, 'index']);
Router::post('/home',[HomeController::class,'booking']);
//login
Router::get('/login',[UserController::class,'loginpage']);
Router::post('/login',[UserController::class,'loginUser']);
//logout
Router::get('/logout',[UserController::class,'logoutUser']);
//register
Router::get('/register',[UserController::class,'registers']);
Router::post('/register',[UserController::class,'register']);
//forgot
Router::get('/forgot',[UserController::class,'forgot']);

//home-admin
Router::get('/home-admin',[BookingController::class,'listBooking']);
Router::get('/update-admin',[BookingController::class,'updateBook']);
Router::post('/update-admin',[BookingController::class,'updateBk']);
Router::get('/delete-admin',[BookingController::class,'deleteBk']);
//table-user
Router::get('/user-admin',[UserController::class,'listUser']);
Router::post('/create-user',[UserController::class,'addUser']);
Router::get('/update-user',[UserController::class,'updateUser']);
Router::post('/update-user',[UserController::class,'userUpdate']);
Router::get('/deleteus',[UserController::class,'deleteUser']);
//table-product
Router::get('/product-admin',[ProductController::class,'index']);
Router::post('/create-product',[ProductController::class,'createPr']);
Router::get('/update-product',[ProductController::class,'updatepro']);
Router::post('/update-product',[ProductController::class,'updateProduct']);
Router::get('/delete-product',[ProductController::class,'deleteProduct']);
// table-categories
Router::get('/categories-admin',[CategoriesController::class,'list_cate']);
Router::post('/create-categories',[CategoriesController::class,'createCate']);
Router::get('/update-categories',[CategoriesController::class,'updateCategories']);
Router::post('/update-categories',[CategoriesController::class,'updateCat']);
Router::get('/delete-categories',[CategoriesController::class,'deleteCt']);
//table-admin
Router::get('/table-admin',[TableController::class,'index']);
Router::post('/create-table',[TableController::class,'createTable']);
Router::get('/update-table',[TableController::class,'updateTb']);
Router::post('/update-table',[TableController::class,'updateTable']);
Router::get('/delete-table',[TableController::class,'deleteTable']);
//table-profile
Router::get('/user-profile',[UserController::class,'userProfile']);
$router->resolve();
?>