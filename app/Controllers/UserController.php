<?php
namespace App\Controllers;

use App\Models\User;
use App\Request;

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
//check user và pass có trong db không nếu có thì tiến hành login (Kiểm tra role if==1 admin else user)
// public function checkUser(Request $request){
//     // $User =User::getall();
//     $name  =$request->getBody()['username'];
//     $pass  =$request->getBody()['password'];
//     $User  = User::getall();
    
// }
//admin
public function listUser(){
    $this->view('admin/header');
    $this->view('admin/user');
    $this->view('admin/footer');
}
public function userProfile(){
    $this->view('admin/header');
    $this->view('admin/user-profile');
    $this->view('admin/footer');
}

}
