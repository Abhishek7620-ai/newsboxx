<!-- Code For Log In Form -->
<?php
include('security.php');
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
}
$query = "SELECT * FROM `register` WHERE `Email` = '$email_login' AND `password` = '$password_login'";
$query_runs = mysqli_query($conn,$query);

if(mysqli_fetch_array($query_runs))
{
 $_SESSION['email'] = $email_login;
 header('location: index.php');
}
else
{
 $_SESSION['status'] = 'Email id / Password is Invalid';
 header('location: login.php');
}


?>