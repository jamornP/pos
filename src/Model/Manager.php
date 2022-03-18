<?php
namespace App\Model;

use App\Database\Db;

class Manager extends Db {

    public function getAllManager(){
        $sql ="
            SELECT * FROM users
        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}



?>