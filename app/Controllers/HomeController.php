<?php
namespace App\Controllers;
use App\Models\Booking;
use App\Models\Mytable;
use App\Models\Products;
use App\Models\User;
use App\Request;

class HomeController extends Controller{
    public function index(){      
        $this->view('header');
        $products = Products::all();
        $tables  =Mytable::all();
       return  $this->view('home',['product'=>$products,'table'=>$tables]);  
    }
    public function booking(Request $request){
$data = $request->getBody();
$book = new Booking();
$book->insert($data);
echo '<script>alert("Đặt bàn thành công")</script>';
header('Location:'.ROOT_PATH.'home');
    }
}
?>