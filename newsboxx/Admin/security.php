<?php 

session_start();

$dbconfig = include('database/dbconfig.php');
if($dbconfig)
{
//   echo "Database is Connected";
}
else
{
    header('location: database/dbconfig.php');
}
 if(!$_SESSION['email'])
 {
     header('location: login.php');
 }

?>