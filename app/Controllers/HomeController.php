<?php
namespace App\Controllers;
use App\Models\Users;
class HomeController extends Controller{
    public function index(){
        $this->view('header');     
        $this->view('home'); 
        $this->view('footer'); 
    }
    public function loginUser(){  
        $this->view('login'); 
    }
}
?>