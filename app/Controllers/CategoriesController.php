<?php
namespace App\Controllers;

use App\Models\Categories;
use App\Request;

class CategoriesController extends Controller{
public function list_cate(){
    $this->view('admin/header');
    $categories = Categories::all();
    return $this->view('admin/categories',['categories'=>$categories]);
}
public function deleteCt(Request $request){
    $id = $request->getBody()['Cate_id'];
    $categories  = new Categories();
    $categories->deleteCate($id);
header('Location:Assigment/public/categories-admin');
}
}
?>