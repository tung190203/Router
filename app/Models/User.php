<?php
namespace App\Models;
use PDO;
class User extends BaseModel{
    protected $tableName = "User";
    public static function getall()
    {
        $model = new static;
        $model->sql_builder = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sql_builder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}

?>