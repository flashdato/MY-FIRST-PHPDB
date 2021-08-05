<?php

class Usersctrl extends Users {

    public function createUser($name, $lastname, $date)
    {
      $this->setUser($name, $lastname, $date);
    }
    
}