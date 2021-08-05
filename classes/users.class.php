<?php

class Users extends DB{

    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE users_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $user = $stmt->fetchAll();
        return $user;
    }

    protected function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);

        $userlist = $stmt->fetchAll();
        $result = [];

        foreach ($userlist as $user){
        array_push($result, $user['users_name']);
        }
        return $result;
        
    }
    
    protected function setUser($name, $lastname, $date){
        $sql = "INSERT INTO users(users_name, users_lastname, users_dateofbirth) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname, $date]);
        
    }

    protected function delUser($name){
        $sql = "DELETE FROM `users` WHERE `users_name` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
    }
}