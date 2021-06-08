<?php 
include ('header.php'); 

include ('../../Model/Course.php');

?>

<?php
  $cours=new Cours;
foreach ($cours->getCours() as $key => $cour) {?>
<?php if($cour['id']==$_GET['id']) { ?>
<h1 class="text-secondary text-center"><?php echo $cour['title'];?></h1>

<ul class="list-group col-md-8 offset-2 mt-5">
<li class="list-group-item">Price : <?php echo $cour['price'] ;?>€</li>
<li class="list-group-item">Description : <?php echo $cour['description'];?></li>
<li class="list-group-item">Time : <?php echo $cour['hours'];?> hours</li>
<li class="list-group-item">Date : <?php echo $cour['date'];?></li>
<li class="list-group-item">Creator : <?php echo $cour['creator'];?></li>
<li class="list-group-item">
   <a href="" class="btn btn-warning">buy now</a>
</li>
</ul>
<?php } ?>
<?php } ?>
<?php include ('footer.php') ?>
