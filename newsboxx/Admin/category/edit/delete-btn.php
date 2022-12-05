<?php
include('../security.php');
    
$conn = mysqli_connect('localhost','root');

     mysqli_select_db($conn,'new-boxx');
     
     if(isset($_POST['delete-btn']))

{
    $id = $_POST['edit_id'];
}
  
$query = "DELETE FROM `register` WHERE `id` = $id ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: ../Employee_table.php');
}
else
{
    echo 'Error';
}


