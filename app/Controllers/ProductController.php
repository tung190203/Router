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
  public function deleteProduct(Request $request)
  {
    $id = $request->getBody()['Pr_id'];
    $pr = new Products();
    $pr->deletePr($id);
    header('Location:'.ROOT_PATH.'product-admin');
  }
  //update
  public function updatepro(Request $request)
  {
    $this->view('admin/header');
    $id = $request->getBody()['Pr_id'];
    $product = Products::findOneProduct($id);
    $categories = Categories::all();
    return $this->view('admin/updatepr', ['products' => $product,'categories' => $categories]);
  }

  public function updateProduct(Request $request)
  {
    $data = $request->getBody();
    $product = new Products();
    $product->updatePr($data['Pr_id'], $data);
    header('Location:'.ROOT_PATH.'product-admin');
  }
public function createPr(Request $request){
  $data = $request->getBody();
    $data['Image']  =$_FILES['Image']['name'];
  move_uploaded_fIle($_FILES['Image']['tmp_name'],"uploads/".$_FILES['Image']['name']);
  $product = new Products();
  $product->insert($data);
  header('Location:'.ROOT_PATH.'product-admin');
}
}
?>