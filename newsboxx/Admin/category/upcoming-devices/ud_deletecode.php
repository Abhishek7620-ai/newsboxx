<?php
include('../security.php');
    
$conn = mysqli_connect('localhost','root');

     mysqli_select_db($conn,'new-boxx');
     
     if(isset($_POST['delete-btn']))

{
    $slug = $_POST['delete_id'];
}
  
$query = "DELETE FROM `upcoming-device` WHERE `slug` = '$slug' ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: upcoming-devices.php');
}
else
{
    echo 'Error';
}
