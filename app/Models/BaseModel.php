<?php
namespace App\Models;
use PDO;
use PDOException;
class BaseModel
{
    protected $conn;
    protected $sql_builder;
    public $tableName;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=Klassy_cafe;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    //lấy toàn bộ dữ liệu của 1 mảng với $model->tableName sẽ là bảng đc kế thừa bên Controller
    public static function getall()
    {
        $model = new static;
        $model->sql_builder = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sql_builder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function insert($data = [])
    {
        $this->sql_builder = "INSERT INTO $this->tableName(";
        $colName = '';
        $params = '';

        foreach ($data as $key => $value) {
            $colName .= "`$key`, ";
            $params .= ":$key, ";
        }

        //Xóa dấu ', ' ở bên phải chuỗi
        $colName = rtrim($colName, ', ');
        $params = rtrim($params, ', ');

        //Nối vào chuỗi SQL
        $this->sql_builder .= $colName . ") VALUES(" . $params . ")";

        $stmt = $this->conn->prepare($this->sql_builder);
        $stmt->execute($data);
    }
    public static function getOne($id)
    {
        $model = new static;
        $model->sql_builder = "SELECT * FROM $model->tableName WHERE id='" . $id;
        $stmt = $model->conn->prepare($model->sql_builder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if ($result) {
            return $result[0];
        }
        return false;

    }
    public function update ($id,$data=[]){
        $this->sql_builder = "UPDATE $this->tableName SET";
        foreach ($data as $colName => $value) {
            $this->sql_builder .= "`$colName`=:$colName, ";
        }
        $this->sql_builder = rtrim($this->sql_builder, ", ");
        $this->sql_builder .= " WHERE id=:id";

        $data['id'] = $id;
        $stmt = $this->conn->prepare($this->sql_builder);
        $stmt->execute($data);
    }
    public function delete($id){
$this->sql_builder  ="DELETE FROM $this->tableName WHERE id=".$id;
$stmt = $this->conn->prepare($this->sql_builder);
$stmt->execute();
    }
    public function where($colName, $condition, $value)
    {
        $this->sql_builder = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value' ";
        return $this;
    }
    public function andWhere($colName, $condition, $value)
    {
        $this->sql_builder .= " AND `$colName` $condition '$value' ";
        return $this;
    }
    public function orWhere($colName, $condition, $value)
    {
        $this->sql_builder .= " OR `$colName` $condition '$value' ";
        return $this;
    }
    public function get()
    {
        $stmt = $this->conn->prepare($this->sql_builder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}
