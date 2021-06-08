<?php
 include ('operation.php');

session_start();
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header('Location:../customer/index.php');
}

 if(isset($_POST['email'])&&isset($_POST['password'])){
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        $get=new Auth;
        foreach ($get->getUser()  as $user){
            if($user['email']==$_POST['email']&&$user['password']==$_POST['password']){
                $_SESSION['email']=$_POST['email'];
                $_SESSION['id']=$user['id'];
                header("Location:../customer/index.php");
                echo $_SESSION['id'];

                
            }
            
        
        }
    }

}






?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
<div class="form-group col-md-6 offset-3 mt-5">
<input type="email" placeholder="email" name="email" class="form-control mt-2">
<input type="password" placeholder="password" name="password" class="form-control mt-2">
<button class="btn btn-success form-control  mt-2">Login</button>

</div>
</form>
</body>
</html>