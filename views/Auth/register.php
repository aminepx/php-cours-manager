<?php
 include ('operation.php');

 if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header ('Location:login.php');
}


 if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])){
    if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        
    }
     $add= new Auth;
    $add->addUser($name,$email,$password);
    header("Location:login.php");



}













?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

<div class="form-group col-md-6 offset-3 mt-5">
<input type="text" placeholder="name" name="name" class="form-control mt-2">
<input type="text" placeholder="email" name="email" class="form-control mt-2">
<input type="password" placeholder="password" name="password" class="form-control mt-2">
<button class="btn btn-primary form-control  mt-2">Register</button>

</div>

</form>
</body>
</html>