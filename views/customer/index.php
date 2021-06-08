<?php 
include ('header.php');
include_once ('../../Model/Course.php');
include_once ('../Auth/operation.php');


$cours= new Cours();


if(isset($_POST['cours_id'])&&!empty($_SESSION['id'])){

    $user_id=$_SESSION['id'];
    $cours_id=$_POST['cours_id'];

  $cours->insetId($user_id,$cours_id);
  
  
  }
 




$check= new Cours();
// if($check->checkCoursIfExist($user_id,$cours_id)){
  

// }



 















// echo $_SESSION['id'];

// if(isset($_SESSION['id'])){
//   $user_id=$_SESSION['id'];
//   // $cours_id=$_GET['id'];

// echo $user_id;


//   $insert= new Cours();
//   $insert->insetId($user_id,$cours_id);


// }



?>







<h1 class="text-secondary text-center">courses page</h1>

<div class="container-fluid">
<div class="row ">
<?php
  
foreach ($cours->getCours() as $key => $cour) {?>

<div class="card col-md-4" style="width: 18rem;"> 

  <img class="card-img-top" src=../admin/images/<?php echo $cour['photo'] ?> alt="Card image cap">
  <div class="card-body">
 
    <h5 class="card-title"><?php echo $cour['title'];?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $cour['description'];?></li>
    <li class="list-group-item">
    <div class="d-flex m-2">
      <a href="#" class="btn btn-success">buy now</a>
   
   <?php if($check->checkCoursIfExist($_SESSION['id'],$cour['id'])) { ?>
     <form action="" method="post"> 
         <button class="btn btn-info ms-2" id="submitbtn" >Add to card</button>
         <input name="cours_id" type="hidden" value="<?php echo $cour['id'];?>"> 
         </form>
         <?php } ?>
      <a href="details.php?id=<?php echo $cour['id'] ?>" class="ms-2 btn btn-secondary">Details</a>
</div>
    </li>
  </ul>
  
</div>
<?php } ?>

</div>
</div>
<?php include ('footer.php') ?>


