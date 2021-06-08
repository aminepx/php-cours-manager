<?php
require_once ('../../Model/Database.php');

class Auth extends Database{

    public function addUser($name,$email,$password)
    {
        $pdo=$this->connect();
        if ($pdo) {
           
            $query = "INSERT into users(name,email,password) values(:name,:email,:password);";
            $statment = $pdo->prepare($query);
            $statment->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $password
                
                ]
            );
           
        }
        
    }

    public function getUser(){

        $pdo=$this->connect();
        if($pdo){
            $query='SELECT * from users';
            $statment=$pdo->prepare($query);
            $statment->execute();
           return $statment->fetchAll() ;
        }
    }

    


    

}





?>