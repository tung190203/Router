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
header('Location:'.ROOT_PATH.'categories-admin');
}
public function updateCategories(Request $request){
    $this->view('admin/header');
$id = $request->getBody()['Cate_id'];
$cate = Categories::findOneCate($id);
return $this->view('admin/updatecate',['categories'=>$cate]);
}
public function updateCat(Request $request){
$data = $request->getBody();
$cate = new Categories();
$cate->updateCate($data['Cate_id'],$data);
header('Location:'.ROOT_PATH.'categories-admin');
}
public function createCate(Request $request){
$catrgories = $request->getBody();
$cate = new Categories();
$cate->insert($catrgories);
header('Location:'.ROOT_PATH.'categories-admin');
}
}
?>