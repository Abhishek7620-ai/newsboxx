<?php
include('../security.php');
    
$conn = mysqli_connect('localhost','root');

     mysqli_select_db($conn,'new-boxx');


//  Code For Update Posts 
     
     if(isset($_POST['update-btn']))
     {

{
    $id = $_POST['Edit-id'];
}
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $display = $_POST['display'];
    $ram = $_POST['ram'];
    $processor = $_POST['processor'];
    $storage = $_POST['storage'];
    $f_camera = $_POST['f_camera'];
    $r_camera = $_POST['r_camera'];
    $battery = $_POST['battery'];
    $os = $_POST['os'];
    $os_icon = $_POST['os_icon'];
    $link = $_POST['link'];


    

$query = "UPDATE `shop` SET `brand`='$brand',`model`='$model',`price`='$price',`display`='$display',`ram`='$ram',`processor`='$processor',`storage`='$storage',`f_camera`='$f_camera',`r_camera`='$r_camera',`battery`='$battery',`os`='$os',`os_icon`='$os_icon',`link`='$link' WHERE `m_id` = '$id' ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: shop.php');
}
else
{
    echo 'Error';
}
     }




?>