<?php
namespace App\Controllers;

use App\Models\Products;

class ProductController extends Controller{
    public function index(){
            $this->view('admin/header');
      $this->view('admin/product');
      $this->view('admin/footer');
        $products = Products::getall();
      return $this->view('admin/product',['product'=>$products]);

       
    }
}
?>