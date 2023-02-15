<?php
namespace App\Controllers;
use App\Models\Users;


class UserController extends Controller{
    //page
    //load trang login
public function loginpage(){
    $this->view('header');
    $this->view('login');
    $this->view('footer');
}
//load trang register
public function registers(){    
    $this->view('header');
   $this->view('register');
    $this->view('footer');
}
public function forgot(){
    $this->view('header');
   $this->view('forgot_pass');
    $this->view('footer');
}
// thực hiện lấy dữ liệu 
public function checkUser(){
$Users = Users::getall();

}
//admin
public function listUser(){
    $Users = Users::getall();
    return $this->view('admin/user',['Users'=>$Users]);
}
}
