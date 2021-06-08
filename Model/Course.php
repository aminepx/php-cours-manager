<?php

require_once ('Database.php');



class Cours extends Database{

    public function addCour($title,$price,$description,$hours,$date,$creator,$photo)
    {
        $pdo=$this->connect();
        if ($pdo) {
           
            $query = "INSERT into coureses(title,price,description,hours,date,creator,photo) values(:title,:price,:description,:hours,:date,:creator,:photo);";
            $statment = $pdo->prepare($query);
            $statment->execute([
                ':title' => $title,
                ':price' => $price,
                ':description' => $description,
                ':hours' => $hours,
                ':date' => $date,
                ':creator' => $creator,
                ':photo' => $photo,
                ]
            );
           
        }
        
    }

    public function getCours(){

        $pdo=$this->connect();
        if($pdo){
            $query='SELECT * from coureses';
            $statment=$pdo->prepare($query);
            $statment->execute();
           return $statment->fetchAll() ;
        }
    }

    public function updateCours($id,$title,$price,$description,$hours,$date,$creator,$photo){
        $pdo=$this->connect();
        if($pdo)
        {
            
            
           $query="UPDATE coureses set title=:title, price=:price, description=:description, hours=:hours, date=:date, creator=:creator, photo=:photo where id=:id";
           $statement=$pdo->prepare($query);
           $statement->execute(
               [
                   ':id'=>$id,
                   ':title' => $title,
                   ':price' => $price,
                   ':description' => $description,
                   ':hours' => $hours,
                   ':date' => $date,
                   ':creator' => $creator,
                   ':photo' => $photo

                   
    
               ]
           );
    
        }
    
    }
    public function deleteCours($id){
        $pdo=$this->connect();
        if($pdo){
          $query='DELETE from coureses where id=:id';
          $statement=$pdo->prepare($query);
          $statement->execute([
              ':id'=>$id,
          ]);
        }
        
    }
    public function insetId($user_id,$cours_id){
        $pdo=$this->connect();
            if ($pdo) {
               

                if($this->checkCoursIfExist($user_id,$cours_id))
                {
                    $query = "INSERT into user_cours(user_id,cours_id) values(:user_id,:cours_id);";
                    $statment = $pdo->prepare($query);
                    $statment->execute([
                        ':user_id' => $user_id,
                        ':cours_id' => $cours_id
                        
                        
                        ]
                    );
                }
               
            }
    
    }


   public function checkCoursIfExist($user_id,$cours_id)
    {
        $pdo=$this->connect();
        if ($pdo) {
        $check_query="SELECT *from user_cours where user_id=:user_id and cours_id=:cours_id";
        $statment = $pdo->prepare($check_query);
        $statment->execute([
            ':user_id' => $user_id,
            ':cours_id' => $cours_id
            
            
            ]
        );
        $data=$statment->fetchAll();
        if(count($data)==0)
        {
            return true;
        }

    }
    }

    public function getUserCours(){

        $pdo=$this->connect();
        if($pdo){
            $query='SELECT * from user_cours';
            $statment=$pdo->prepare($query);
            $statment->execute();
           return $statment->fetchAll() ;
        }
    }
    public function cartCours()
    {
        $pdo=$this->connect();
        if ($pdo) {
    $query="SELECT coureses.title,coureses.price, users.name,user_cours.user_id,user_cours.cours_id from coureses
    inner join user_cours on coureses.id=user_cours.cours_id
    inner join users on users.id=user_cours.user_id";

        $statment = $pdo->prepare($query);
        $statment->execute();

        return($statment->fetchAll());

    }


    }

    public function deleteCard($cours_id){
        $pdo=$this->connect();
        if($pdo){
          $query='DELETE from user_cours where cours_id=:cours_id';
          $statement=$pdo->prepare($query);
          $statement->execute([
              ':cours_id'=>$cours_id,
          ]);
        }
        
    }
    public function my_shoppingcount($id)
    {
        $pdo=$this->connect();
        if($pdo){
            $query='SELECT * from user_cours where user_id=:id';
            $statement=$pdo->prepare($query);
            $statement->execute([
                ':id'=>$id,
            ]);
            return($statement->fetchAll());
        }


}
public function getAdmin($user){
    $pdo=$this->connect();
    if($pdo){
        $query='SELECT is_admin from users where is_admin=:id and id=:user';
        $statment=$pdo->prepare($query);
        $statment->execute([
            ':user' =>$user,
            ':id'=> 0
        ]);
        if(count($statment->fetchAll())>0)
        {
            return true;
        }
       else{
           return false;
       }
    }
}





}













?>