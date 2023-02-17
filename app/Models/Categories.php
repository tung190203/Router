<?php
namespace App\Models;
class Categories extends BaseModel{
protected $tableName = "Categories";
public function deleteCate($id)
{
  $this->sqlBuilder = "DELETE FROM $this->tableName WHERE Cate_id=:id";
  $stmt = $this->conn->prepare($this->sqlBuilder);
  $stmt->execute(['id'=>$id]);
}
}
?>