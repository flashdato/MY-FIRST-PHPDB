<?php

class Usersview extends Users {

    public function showUser($name){
        $result = $this->getUser($name);
        echo "First name: " . $result[0]['users_name'] . "  Lastname:" . $result[0]['users_lastname']. "  Date of Birth:" . $result[0]['users_dateofbirth'];
        echo '<br>';
    } 
    
    public function showUsers(){
        echo "List of all users: ";
        foreach($this->getUsers() as $user){
            echo $user . '; ';
        }
        echo '<br>';
        
    }
}