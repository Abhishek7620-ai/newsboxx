<?php
include('../security.php');
    
$conn = mysqli_connect('localhost','root');

     mysqli_select_db($conn,'new-boxx');
     
     if(isset($_POST['delete-btn']))

{
    $id = $_POST['delete_id'];
}
  
$query = "DELETE FROM `shop` WHERE `m_id` = '$id' ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: shop.php');
}
else
{
    echo 'Error';
}
