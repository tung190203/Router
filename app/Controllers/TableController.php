<?php
namespace App\Controllers;
use App\Models\Table;
class TableController extends Controller{
    public function index(){
        $this->view('admin/header');
        $this->view('admin/table');
        $this->view('admin/footer');
    }
}
?>