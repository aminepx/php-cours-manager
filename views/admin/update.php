<?php 

include ('sidebarHeader.php');
include ('../../Model/Course.php');

if(isset($_POST['title'])&&isset($_POST['price'])&&isset($_POST['description'])&&isset($_POST['hours'])&&isset($_POST['date'])&&isset($_POST['creator'])&&isset($_FILES['photo'])){
    if(!empty($_POST['title'])&&!empty($_POST['price'])&&!empty($_POST['description'])&&!empty($_POST['hours'])&&!empty($_POST['date'])&&!empty($_POST['creator'])&&!empty($_FILES['photo'])){
        $title=$_POST['title'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $hours=$_POST['hours'];
        $date=$_POST['date'];
        $creator=$_POST['creator'];
        $photo=$_FILES['photo']['name'];
        $id=$_GET['id'];
            


    }
    $cours=new Cours;
    $cours->updateCours($id,$title,$price,$description,$hours,$date,$creator,$photo);
    header('location:index.php');

}










?>


<form action="" method="post" class="col-md-6 offset-3 mt-5">

    <div class="form-group ">
    <?php
  $cours=new Cours;
foreach ($cours->getCours() as $key => $cour) {?>
<?php if($cour['id']==$_GET['id']) { ?>
    <input type="text" placeholder="title" name="title" class="form-control mt-2" value="<?php echo $cour['title'];?>">
        <input type="text" placeholder="price" name="price" class="form-control mt-2"  value="<?php echo $cour['price'];?>">
        <input type="text" placeholder="description" name="description" class="form-control mt-2"  value="<?php echo $cour['description'];?>">
        <input type="text" placeholder="hours" name="hours" class="form-control mt-2"  value="<?php echo $cour['hours'];?>">
        <input type="text" placeholder="date" name="date" class="form-control mt-2"  value="<?php echo $cour['date'];?>">
        <input type="text" placeholder="creator" name="creator" class="form-control mt-2"  value="<?php echo $cour['creator'];?>">
        <input type="file" placeholder="image" name="photo" class="form-control mt-2"  value="<?php echo $cour['photo'];?>">

        <button class="form-control btn btn-warning">update</button>
        <?php } ?>
        <?php } ?>
    </div>
</form>


<?php include('sidebarFooter.php') ?>