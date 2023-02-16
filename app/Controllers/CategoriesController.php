<?php
namespace App\Controllers;

use App\Models\Categories;

class CategoriesController extends Controller{
public function list_cate(){
    $this->view('admin/header');
    $this->view('admin/categories');
    $this->view('admin/footer');
    $categories = Categories::getall();
    return $this->view('admin/categories',['Categories'=>$categories]);
}
}
?>