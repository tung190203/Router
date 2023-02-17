<?php
namespace App\Models;
use PDO;
class Products extends BaseModel{
protected $tableName = "Products";
public function deletePr($id)
{
  $this->sqlBuilder = "DELETE FROM $this->tableName WHERE Pr_id=:id";
  $stmt = $this->conn->prepare($this->sqlBuilder);
  $stmt->execute(['id'=>$id]);
}
public function updatePr($id,$data = [])
  {
    $this->sqlBuilder = "UPDATE $this->tableName SET";
    foreach ($data as $colName => $value) {
      $this->sqlBuilder .= "`$colName`=:$colName, ";
    }
    $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
    $this->sqlBuilder .= " WHERE Pr_id=:id";
    $data['id'] = $id;
    $stmt = $this->conn->prepare($this->sqlBuilder);

    $stmt->execute($data);
  }
  public static function findOneProduct($id)
  {
    $model = new static;
    $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE Pr_id=".$id;
    $stmt = $model->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    if ($result) {
      return $result[0];
    }
    return false;
  }
}
?>