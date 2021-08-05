<?php

class Users extends DB{

    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE users_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $usersList = $stmt->fetchAll();
        return $usersList;
    }

    public function setUser($name, $lastname, $date){
        $sql = "INSERT INTO users(users_name, users_lastname, users_dateofbirth) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname, $date]);
        
    }
}