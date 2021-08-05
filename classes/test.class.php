<?php

class Test extends DB {

    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()){
            echo $row['users_name'] . '<br>';
        }
    }



    public function getUsersSTMT($name, $lastname){
        $sql = "SELECT * FROM users WHERE users_name = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['users_dateofbirth'] . '<br>';
        }
    }


    public function setUsersSTMT($name, $lastname, $date){
        $sql = "INSERT INTO users(users_name, users_lastname, users_dateofbirth) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname, $date]);
        
    }
}