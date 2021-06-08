<?php

include_once ('../../Model/Course.php');
session_start();
if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('Location:../Auth/login.php');
}

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location:../Auth/login.php');
}

$data= new Cours();



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">
        <i class="fas fa-shopping-cart"></i>
        cart <?php echo count($data->my_shoppingcount($_SESSION['id']));  ?>
        </a>
      </li>
      
     
    </ul>
    
  
    <form class="form-inline my-2 my-lg-0" action="" method="post">
      <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <button class="btn btn-danger m-2 my-2 my-sm-0" name="logout">logout</button> 
    </form>
  
    
  </div>
</nav>
