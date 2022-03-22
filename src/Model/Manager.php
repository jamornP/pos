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
    public function addManager($manager){
        $sql = " 
        INSERT INTO users (
            name,
            email,
            password
        ) VALUES (
            :name,
            :email,
            :password
        )
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($manager);
        return $this->pdo->lastInsertId();
    }
    public function updateManager($manager){
        $sql = " 
        UPDATE users SET 
            name = :name,
            email = :email,
            password = :password
        WHERE id = :id
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($manager);
        return true;
    }
    public function deleteManager($id){
        $sql = "
            DELETE 
            FROM 
                users 
            WHERE 
                id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }
    public function getManagerById($id){
        $sql ="
            SELECT 
                * 
            FROM 
                users 
            WHERE 
                id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll();
        return $data[0];
    }
}



?>