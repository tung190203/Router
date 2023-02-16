<?php
namespace App\Controllers;
class HomeController extends Controller{
    public function index(){          
        $this->view('header');
        $this->view('home'); 
        $this->view('footer');
    }
    public function home_admin(){
        $this->view('admin/header');
        $this->view('admin/home');
        $this->view('admin/footer');
    }

}
?>