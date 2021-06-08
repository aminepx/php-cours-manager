<?php 
include ('sidebarHeader.php') ;
require ('../../Model/Course.php');




$tab=["image/jpeg","image/jpg","image/png","image/gif","image/tif","image/psd","image/eps"];

if(isset($_POST['title'])&&isset($_POST['price'])&&isset($_POST['description'])&&isset($_POST['hours'])&&isset($_POST['date'])&&isset($_POST['creator'])&&isset($_FILES['photo'])){
    if(!empty($_POST['title'])&&!empty($_POST['price'])&&!empty($_POST['description'])&&!empty($_POST['hours'])&&!empty($_POST['date'])&&!empty($_POST['creator'])&&!empty($_FILES['photo'])){
        $title=$_POST['title'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $hours=$_POST['hours'];
        $date=$_POST['date'];
        $creator=$_POST['creator'];
        $photo=$_FILES['photo']['name'];

            if (in_array($_FILES['photo']['type'], $tab))
               
                {

                    $path_of_image=$_FILES['photo']['tmp_name'];

                    $destination="images/".$_FILES['photo']['name'];
                
                    move_uploaded_file($path_of_image,$destination);

                }
                else{
                    echo 'error';
                }
            


    }
    $cours=new Cours;
    $cours->addCour($title,$price,$description,$hours,$date,$creator,$photo);
    

}






?>


<form action="" method="post" class="col-md-6 offset-3 mt-5" enctype="multipart/form-data">

    <div class="form-group ">
        <input type="text" placeholder="title" name="title" class="form-control mt-2">
        <input type="text" placeholder="price" name="price" class="form-control mt-2">
        <input type="text" placeholder="description" name="description" class="form-control mt-2">
        <input type="text" placeholder="hours" name="hours" class="form-control mt-2">
        <input type="text" placeholder="date" value="<?php echo date("Y/m/d") ?>" name="date" class="form-control mt-2">
        <input type="text" placeholder="creator" name="creator" class="form-control mt-2">
        <input type="file" placeholder="image" name="photo" class="form-control mt-2">
        <button class="form-control btn btn-success">add new</button>
    </div>
</form>


<?php include ('sidebarFooter.php') ?>