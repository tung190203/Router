<?php
namespace App\Models;
use PDO;
class Booking extends BaseModel{
    protected $tableName = "Booking";
    public function deleteBooking($id)
{
  $this->sqlBuilder = "DELETE FROM $this->tableName WHERE Booking_id=:id";
  $stmt = $this->conn->prepare($this->sqlBuilder);
  $stmt->execute(['id'=>$id]);
}
public static function findOneBooking($id)
{
  $model = new static;
  $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE Booking_id=".$id;
  $stmt = $model->conn->prepare($model->sqlBuilder);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
  if ($result) {
    return $result[0];
  }
  return false;
}

public function updateBooking($id,$data = [])
{
  $this->sqlBuilder = "UPDATE $this->tableName SET";
  foreach ($data as $colName => $value) {
    $this->sqlBuilder .= "`$colName`=:$colName, ";
  }
  $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
  $this->sqlBuilder .= " WHERE Booking_id=:id";
  $data['id'] = $id;
  $stmt = $this->conn->prepare($this->sqlBuilder);

  $stmt->execute($data);
}
}
?>