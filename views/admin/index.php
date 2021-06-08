<?php 
include ('sidebarHeader.php') ;
include('../../Model/Course.php');
session_start();
$admin= new Cours();
  if($admin->getAdmin($_SESSION['id'])){
    header ('location:../customer/index.php');
  }


if (isset($_POST['id'])) {
  $cours=new Cours;
    $cours-> deleteCours($_POST['id']);
}


?>




<table class="table col-md-6 offset-3 mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Creator</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php
  $cours=new Cours;
foreach ($cours->getCours() as $key => $cour) {?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $cour['id'];?></th>
      <td><?php echo $cour['title'];?></td>
      <td><?php echo $cour['creator'];?></td>
      <td><?php echo $cour['price'];?></td>
      <td><a href="update.php?id=<?php echo $cour['id'] ?>" class="ms-2 btn btn-warning">Update</a></td>
      <td>
       <form action="" method="post">
         <button class="btn btn-danger ms-2" >delete</button>
         <input name="id" type="hidden" value="<?php echo $cour['id'];?>"> 
         </form>
      </td>
     
    </tr>
    
  </tbody>
  <?php } ?>
</table>




<?php include('sidebarFooter.php') ?>