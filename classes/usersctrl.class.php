<?php

class Usersctrl extends Users {

    public function createUser($name, $lastname, $date)
    {
      $this->setUser($name, $lastname, $date);

      echo "User ". $name . " was added succesfully";
      echo '<br>';
    }

    public function deleteUser($name)
    {
      $this->delUser($name);

      echo "User ". $name . " was deleted succesfully";
      echo '<br>';
    }
    
}