<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
                                
</head>

<body class="bg-gradient-primary" style="overflow:hidden">

    <div class="container ">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-3">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2 "></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                        <br>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <br>

                            <form class="user" action="code.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="Firstname" id="exampleFirstName"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="Lastname" id="exampleLastName"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="Email" id="exampleInputEmail"
                                        placeholder="Email Address" required>
                                </div>

                            
                                    
                                    <div class="form-group" >
                                        <input type="text" class="form-control form-control-user" 
                                           name="Bdate" id="exampleInputPassword" placeholder="Birthdate" onfocus="(this.type='date')" required>
                                    </div>
                                
                                
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                           name="Password" id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                           name="confirm-password" id="exampleRepeatPassword" placeholder="Confirm Password" required>

                                    </div>
                                    </div>
                                    <?php 

                                    if(isset($_SESSION['work']) && $_SESSION['work'] !="")
                                    {
                                        echo ' <h6 align="center" style="color:blue;" >'.$_SESSION['work'].'</h6>';
                                        unset($_SESSION['work']);
                                    }

                                    if(isset($_SESSION['failed']) && $_SESSION['failed'] !="")
                                    {
                                        echo '<h6 align="center" style="color:red;">'.$_SESSION['failed'].'</h6>';
                                        unset($_SESSION['failed']);
                                    }

                                    ?>
                                 <br>
                                <button type="submit" name="registration-btn" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>