    <?php
include('../security.php');
    
$conn = mysqli_connect('localhost','root');

     mysqli_select_db($conn,'new-boxx');
     
     if(isset($_POST['update-btn']))

{
    $id = $_POST['Edit-id'];
}
    $firstname = $_POST['Firstname'];
    $lastname  = $_POST['Lastname'];
    $email     = $_POST['Email'];
    $Bdate     = $_POST['Bdate'];
    $password  = $_POST['Password'];

    $bday = new DateTime($Bdate); // Your date of birth
    $today = new Datetime(date('m.d.y'));
    $diff = $today->diff($bday);

$query = "UPDATE `register` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`age`='$diff->y' WHERE `id` = $id ";
$query_runs = mysqli_query($conn,$query);

if($query_runs)
{
    header('Location: ../../Employee_table.php');
}
else
{
    echo 'Error';
}



    

?>