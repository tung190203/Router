<?php
namespace App\Models;
use PDO;
class User extends BaseModel{
    protected $tableName = "User";
    
    public static function findOneUser($User_id)
    {
      $model = new static;
      $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE User_id=".$User_id;
      $stmt = $model->conn->prepare($model->sqlBuilder);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
      if ($result) {
        return $result[0];
      }
      return false;
    } 
    public function deleteUser($id)
    {
      $this->sqlBuilder = "DELETE FROM $this->tableName WHERE User_id=:id";
      $stmt = $this->conn->prepare($this->sqlBuilder);
      $stmt->execute(['id'=>$id]);
    }

  public function updateUsers($id, $data = []) {
    $this->sqlBuilder = "UPDATE $this->tableName SET";
    foreach ($data as $colName => $value) {
      $this->sqlBuilder .= "`$colName`=:$colName, ";
    }
    $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
    $this->sqlBuilder .= " WHERE User_id=:id";
    $data['id'] = $id; 
    $stmt = $this->conn->prepare($this->sqlBuilder);
  
    $stmt->execute($data);
  }

}

?>