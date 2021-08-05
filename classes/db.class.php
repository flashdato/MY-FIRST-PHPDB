<?php

class DB {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbna = "DataBase";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbna;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;   
    }

}