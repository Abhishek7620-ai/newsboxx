<?php
include('../../security.php');
    
$conn = mysqli_connect('localhost','root');

     mysqli_select_db($conn,'new-boxx');


//  Code For Update Posts 
     
     if(isset($_POST['update-btn']))
     {

{
    $id = $_POST['Edit-id'];
}
    $image = $_POST['image'];
    $img_title = $_POST['img_title'];
    $img_alt = $_POST['img_alt'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $specifications = $_POST['specifications'];
    $category = $_POST['category'];
    $tag = $_POST['tag'];
    $date = $_POST['date'];
    $video = $_POST['video'];
    $views = $_POST['views'];


    

$query = "UPDATE `gadget` SET `image`='$image',`img_title`='$img_title',`img_alt`='$img_alt',`name`='$name',`slug`='$slug',`specifications`='$specifications',`category`='$category',`tag`='$tag',`date`='$date',`video`='$video',`views`='$views' WHERE `slug` = '$id' ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: gadget.php');
}
else
{
    echo 'Error';
}
     }




?>