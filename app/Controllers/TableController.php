<?php
namespace App\Controllers;
use App\Models\Mytable;
use App\Request;

class TableController extends Controller{
    public function index(){
        $this->view('admin/header');
        $mytable =Mytable::all();
        return $this->view('admin/table',['mytable'=>$mytable]);
    }
    public function createTable(Request $request){
     $data =  $request->getBody();
     $mytable = new Mytable();
     $mytable->insert($data);
     header('Location:'.ROOT_PATH.'table-admin');
    }
    public function updateTb(Request $request){
        $this->view('admin/header');
        $id = $request->getBody()['Table_id'];
     $tables = Mytable::findOneTable($id);
     return $this->view('admin/updatetable',['Mytable'=>$tables]);
    }
    public function updateTable(Request $request){
        $data = $request->getBody();
        $tables = new  Mytable();
        $tables->updateTable($data['Table_id'],$data);
        header('Location:'.ROOT_PATH.'table-admin');
    }
    public function deleteTable(Request $request){
$id = $request->getBody()['Table_id'];
$tables = new Mytable();
$tables->deleteTable($id);
header('Location:'.ROOT_PATH.'table-admin');
    }
}
?>