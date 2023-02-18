<?php
namespace App\Models;
use PDO;
use PDOException;
class BaseModel
{
  protected $conn;
  protected $sqlBuilder;
  public function __construct()
  {
    try {
      $this->conn = new PDO("mysql:host=localhost;dbname=Klassy_cafe;charset=utf8", "root", "",);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  //static hoạt động từ lớp con
  //self: chỉ hoạt động bên lớp cha
  public static function all()
  { //Lấy ra toàn bộ dữ liệu của bảng
    $model = new static;
    //thay thế cho this khi dùng fn static
    $model->sqlBuilder = "SELECT * FROM $model->tableName";
    $stmt = $model->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result;
  }

  /**
   * params: $data là 1 mảng dữ liệu có cấu trúc:
   * $data=[name=>"Luân",age=>20,address=>"Nam Từ Liêm"];
   * 
   */
  public function insert($data = [])
  {
    $this->sqlBuilder = "INSERT INTO $this->tableName(";
    $colName = '';
    $params = '';

    foreach ($data as $key => $value) {
      $colName .= "`$key`, ";
      $params .= ":$key, ";
    }

    //xóa dấu ', ' ở cuối chuỗi
    $colName = rtrim($colName, ', ');
    $params = rtrim($params, ', ');

    //Nối vào chuỗi SQL
    $this->sqlBuilder .= $colName . ") VALUES(" . $params . ")";
    echo $this->sqlBuilder;

    //Thêm dữ liệu
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute($data);
  }

  public static function findOne($id)
  {
    $model = new static;
    $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE id=".$id;
    $stmt = $model->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    if ($result) {
      return $result[0];
    }
    return false;
  }

  public function update($id,$data = [])
  {
    $this->sqlBuilder = "UPDATE $this->tableName SET";
    foreach ($data as $colName => $value) {
      $this->sqlBuilder .= "`$colName`=:$colName, ";
    }
    $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
    $this->sqlBuilder .= " WHERE id=:id";
    $data['id'] = $id;
    $stmt = $this->conn->prepare($this->sqlBuilder);

    $stmt->execute($data);
  }

  public function delete($id)
  {
    $this->sqlBuilder = "DELETE FROM $this->tableName WHERE id=:id";
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute(['id'=>$id]);
  }

  public function where($colName, $condition, $value)
  {
    $this->sqlBuilder = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value' ";
    return $this;
  }

  public function andWhere($colName, $condition, $value)
  {
    $this->sqlBuilder .= " AND  `$colName` $condition '$value' ";
    return $this;
  }

  public function orWhere($colName, $condition, $value)
  {
    $this->sqlBuilder .= " OR  `$colName` $condition '$value' ";
    return $this;
  }

  public static function limit($colName, $num)
  {
    $model = new static;
    //thay thế cho this khi dùng fn static
    $model->sqlBuilder = "SELECT * FROM $model->tableName ORDER BY `$colName` DESC LIMIT $num";
    $stmt = $model->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result;
  }
  public function get()
  {
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result;
  } 
}
