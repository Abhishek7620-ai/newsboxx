<?php
session_start();
$conn = mysqli_connect('localhost','root','','new-boxx');
mysqli_select_db($conn,'new-boxx');
if($conn)
{
//   echo "Database is Connected";
}
else
{
    echo 'Database Not Connected';
}
    

//  Code For Add New Posts 
if(isset($_POST['addpost-btn']))

{
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
}
$query = "INSERT INTO `post` (`image`, `img_title`, `img_alt`, `name`, `slug`, `specifications`, `category`, `tag`, `date`, `video`) VALUES ('{$image}','{$img_title}', '{$img_alt}', '{$name}', '{$slug}', '{$specifications}', '{$category}', '{$tag}', '{$date}, '{$video}');";

$query_run = mysqli_query($conn,$query);

       if($query_run)
       {
           header("location: home.php");
       }
       else
       {
           echo "Post Not Added";
       }


?>
