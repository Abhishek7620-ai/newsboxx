<!-- Code For Create New Account -->
<?php

include('security.php');
    
$conn = mysqli_connect('localhost','root');
if($conn){
    $send = "Successfully Submited";
 }
     else{
        $send = "Server Not Found Plz try later";
     }
     mysqli_select_db($conn,'newsboxx_newsboxx');
     if(isset($_POST['registration-btn']));

{
    $firstname = $_POST['Firstname'];
    $lastname  = $_POST['Lastname'];
    $email     = $_POST['Email'];
    $Bdate     = $_POST['Bdate'];
    $password  = $_POST['Password'];
    $confirm_password = $_POST['confirm-password'];
}
if($password === $confirm_password){


$bday = new DateTime($Bdate); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);



$query = "insert into register(Firstname,Lastname,Email,Password,age)
values('$firstname','$lastname','$email','$password','$diff->y')"; 
$query_runs = mysqli_query($conn,$query);



    if($query_runs)
{
    $_SESSION['work'] = "Registration Sucessfull";
    header('location: register.php');
}else
{
    $_SESSION['work'] = "Email Id Alredy Registered! Please Use Another Email Id";
    header('location: register.php');
}

}
else
{
    $_SESSION['failed'] = "OOPS! Password And Confirm Password Does Not Match";
    header('location: register.php');
}

?>
<?php include('includes/header.php'); ?>

<h2><?php echo $send ?></h2>

<?php 
include('includes/footer.php'); 

?>






