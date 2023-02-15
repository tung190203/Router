<?php
namespace App\Controllers;

use App\Models\Products;

class ProductController extends Controller{
    public function index(){
        $product = Products::getall();
      return $this->view('admin/product',['product'=>$product]);
       
    }
}
?>