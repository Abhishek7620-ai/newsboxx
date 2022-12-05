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
    $heading = $_POST['heading'];
    $slug = $_POST['slug'];
    $news = $_POST['news'];
    $category = $_POST['category'];
    $tag = $_POST['tag'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $views = $_POST['views'];



$query = "UPDATE `post` SET `image`='$image',`img_title`='$img_title',`img_alt`='$img_alt',`heading`='$heading',`slug`='$slug',`news`='$news',`category`='$category',`tag`='$tag',`date`='$date',`author`='$author',`views`='$views' WHERE `slug` = '$id' ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: home.php');
}
else
{
    echo 'Error';
}
     }




?>