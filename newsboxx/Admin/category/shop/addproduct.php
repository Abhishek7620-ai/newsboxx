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
$brand = $_POST['brand'];
$model = $_POST['model'];
$image = $_POST['image'];
$price = $_POST['price'];
$display = $_POST['display'];
$ram = $_POST['ram'];
$processor = $_POST['processor'];
$storage = $_POST['storage'];
$f_camera = $_POST['f_camera'];
$battery = $_POST['battery'];
$os = $_POST['os'];
$os_icon = $_POST['os_icon'];
$link = $_POST['link'];
}
$query = "INSERT INTO `shop` (`brand`, `model`, `image`, `price`, `display`, `ram`, `processor`, `storage`, `f_camera`, `r_camera`, `battery`, `os`, `os_icon`, `link`) VALUES ('{$brand}','{$model}', '{$image}', '{$price}', '{$display}', '{$ram}', '{$processor}', '{$storage}', '{$f_camera}, '{$r_camera}', '{$battery}', '{$os}', '{$os_icon}', '{$link}');";

$query_run = mysqli_query($conn,$query);

       if($query_run)
       {
           header("location: shop.php");
       }
       else
       {
           echo "Post Not Added";
       }


?>
