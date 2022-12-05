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
$heading = $_POST['heading'];
$slug = $_POST['slug'];
$news = $_POST['news'];
$category = $_POST['category'];
$tag = $_POST['tag'];
$date = $_POST['date'];
$author = $_POST['author'];
}
$query = "INSERT INTO `post` (`image`, `img_title`, `img_alt`, `heading`, `slug`, `news`, `category`, `tag`, `date`, `author`) VALUES ('$image','$img_title', '$img_alt', '$heading', '$slug', '$news', '$category', '$tag', '$date, '$author');"

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
