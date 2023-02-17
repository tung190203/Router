<?php
namespace App\Controllers;

use App\Models\Products;
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
//admin
public function listUser(){
    $this->view('admin/header');
$user = User::all();
return $this->view('admin/user',['user'=>$user]);
}
//update
public function updateUser(Request $request){
    $this->view('admin/header');
   $id = $request->getBody()['User_id'];
   $user = User::findOneUser($id);
   return $this->view('admin/updateuser',['user'=>$user]);
}
public function userUpdate(Request $request) {
    $data = $request->getBody();
    $user = new User();
    $user->updateUsers($data['User_id'], $data);
    header('Location:'.ROOT_PATH.'user-admin');
  }
//delete
public function deleteUser(Request $request){
    $id = $request->getBody()['User_id'];
    $user = new User();
    $user->deleteUser($id);
    header('Location:/Assigment/public/user-admin');
}
public function userProfile(){
    $this->view('admin/header');
    $this->view('admin/user-profile');
    $this->view('admin/footer');
}

}
