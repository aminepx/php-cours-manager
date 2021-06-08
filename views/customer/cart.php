<?php 
include ('header.php');
include_once ('../../Model/Course.php');


$cours=new Cours;

// echo $_SESSION['id'];


if (isset($_POST['cours_id'])) {
 


  $cours=new Cours;
    $cours-> deleteCard($_POST['cours_id']);
}














?>
<h1 class="text-secondary text-center">courses page</h1>

<div class="container-fluid">
<div class="row">
<?php
 
foreach ($cours->cartCours() as $key => $cour) {?>
<?php if($cour['user_id']==$_SESSION['id']) { ?>
<div class="card col-md-4" style="width: 18rem;"> 

  <!-- <img class="card-img-top" src=../admin/images/<?php echo $cour['photo'] ?> alt="Card image cap"> -->
  <div class="card-body">
 
    <h5 class="card-title"><?php echo $cour['title'];?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <!-- <li class="list-group-item"><?php echo $cour['description'];?></li> -->
    <li class="list-group-item"><?php echo $cour['price'];?></li>
    <li class="list-group-item d-flex">
      <a href="../payment/index.php?title=<?php echo $cour['title'] ?>" class="btn btn-success">buy now</a>
      <form action="" method="post">
         <button class="btn btn-danger ms-2" >delete</button>
         <input name="cours_id" type="hidden" value="<?php echo $cour['cours_id'];?>"> 
         </form>
    </li>
    
    
  </ul>
  
</div>
<?php }?>

  
<?php } ?>


</div>
</div>
<?php include ('footer.php') ?>