<?php
namespace App\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Request;

class ProductController extends Controller
{
  public function index()
  {
    $this->view('admin/header');
    $products = Products::all();
    $categories = Categories::all();
    $this->view('admin/product', ['products' => $products, 'categories' => $categories]);
  }
  // public function addProduct(Request $request){
// $product = $request->getBody();
// $product['image'] = $_FILES['image']['name'];
//     move_uploaded_file($_FILES['image']['tmp_name'], "upload/" .$_FILES['image']['name']);
// $pr = new Products();
// $pr->insert($product);
// header('Location:/Assigment/public/product-admin');
//     }
  public function deleteProduct(Request $request)
  {
    $id = $request->getBody()['Pr_id'];
    $pr = new Products();
    $pr->deletePr($id);
    header('Location:/Assigment/public/product-admin');
  }
  public function updatepro(Request $request)
  {
    $this->view('admin/header');
    $id = $request->getBody()['Pr_id'];
    $product = Products::findOneProduct($id);
    $ct = Categories::all();
    return $this->view('admin/updatepr', ['products' => $product,'categories' => $ct]);
  }
  public function updateProduct(Request $request)
  {
    $data = $request->getBody();
    $product = new Products();
    $product->updatePr($data['Pr_id'], $data);
    header('Location:/Assigment/public/product-admin');
  }

}
?>