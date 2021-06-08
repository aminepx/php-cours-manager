<?php

class Database{
    private $root="mysql:dbname=dbcourses;host=localhost;port=3306";
    private $username='root';
    private $password='';
    
    protected function connect(){
        
        try {
            return new PDO($this->root,$this->username,$this->password);
        } catch (\PDOException $ex) {
            echo $ex;
        }
    }
}



?>