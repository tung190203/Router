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
}
//load trang register
public function forgot(){
    $this->view('header');
   $this->view('forgot_pass');
    $this->view('footer');
}
public function loginUser(Request $request){  
    $data = $request->getBody();
    $user = new User();
    $check= $user->checkUser($data['Name'],$data['Password']);
    $_SESSION['user']  = $check;
    if($check==false){
    echo '<script>alert("Tài khoản hoặc mật khẩu không đúng vui lòng đăng nhập lại")</script>';
    echo '<script>window.location.assign("http://localhost/Assigment/public/login")</script>';
    }else{
       if(is_array($check)){
        $_SESSION['user'] = $check;
       }
       echo '<pre>';
       print_r($_SESSION['user']);
       echo '</pre>';
       header('Location:'.ROOT_PATH.'home');
    }
    }
public function logoutUser(){
    session_unset();
    header('Location:'.ROOT_PATH.'home');
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
    header('Location:'.ROOT_PATH.'user-admin');
}
public function userProfile(){
    $this->view('admin/header');
    $this->view('admin/user-profile');
    $this->view('admin/footer');
}
public function addUser(Request $request){
$data = $request->getBody();
$users = new User();
$users->insert($data);
header('Location:'.ROOT_PATH.'user-admin');
}
public function registers(){    
    $this->view('header');
   $this->view('register');

}
public function register(Request $request){
    $data = $request->getBody();
    $user = new User();
    $user->insert($data);
    echo '<script> alert("Đăng kí thành công")</script>';
    echo '<script>window.location.assign("http://localhost/Assigment/public/login")</script>';
}

}
