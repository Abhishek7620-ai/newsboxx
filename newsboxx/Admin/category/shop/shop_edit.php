<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">


</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<?php
session_start();
include('../sidebar.php');


?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['email']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../../img/undraw_profile.svg">
                            </a>
                           
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <form action="../../logout.php" method="POST">
                                <div class="dropdown-divider"></div>
                            
                                <button type="submit" name="logout-btn" class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </button>
                                
                            </div>
                            </form>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Record</h1>
                    </div>
                </div>

                <div class="card h3 mb-0 text-gray-800 " >
                 <div class="card-body ">
                <?php 
                
                $conn = mysqli_connect('localhost','root','','new-boxx');
                mysqli_select_db($conn,'new-boxx');
                if(isset($_POST['edit_btn']))
                
                {
                $id = $_POST['edit_id'];
                }


           
                $query = "SELECT * FROM `shop` WHERE `m_id` = '$id';";
                $query_runs = mysqli_query($conn,$query);
               foreach($query_runs as $row)
               {
                ?>
               
            <form class="user" action="shop_editcode.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       Brand Name: <input type="text" class="form-control" name="brand" id="exampleFirstName"
                                            placeholder="Brand Name" value="<?php echo $row['brand']; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                       Model Name: <input type="text" class="form-control" name="model" id="exampleLastName"
                                            placeholder="Model Name" value="<?php echo $row['model']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    Price: <input type="text" class="form-control" name="price" id="exampleInputEmail"
                                        placeholder="Price"value="<?php echo $row['price']; ?>" required>
                                </div>

                                   
                                    <div class="form-group" >
                                       Display: <input type="text" class="form-control" 
                                           name="display" id="exampleInputPassword" placeholder="Display"  value="<?php echo $row['display']; ?>" required>
                                    </div>

                                    <div class="form-group" >
                                       Ram: <input type="text" class="form-control" 
                                           name="ram" id="exampleInputPassword" placeholder="Ram"  value="<?php echo $row['ram']; ?>" required>
                                    </div>

                                    <div class="form-group" >
                                       Processor: <input type="text" class="form-control" 
                                           name="processor" id="exampleInputPassword" placeholder="Processor"  value="<?php echo $row['processor']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                       Storage: <input type="text" class="form-control" 
                                           name="storage" id="exampleInputPassword" placeholder="Storage"  value="<?php echo $row['storage']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                        Front Camera: <input type="text" class="form-control" 
                                           name="f_camera" id="exampleInputPassword" placeholder="Front Camera"  value="<?php echo $row['f_camera']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                       Rear Camera: <input type="text" class="form-control" 
                                           name="r_camera" id="exampleInputPassword" placeholder="Rear Camera"  value="<?php echo $row['r_camera']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                       Battery: <input type="text" class="form-control" 
                                           name="battery" id="exampleInputPassword" placeholder="Battery Capacity"  value="<?php echo $row['battery']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                        Operating System: <input type="text" class="form-control" 
                                           name="os" id="exampleInputPassword" placeholder="Operating System"  value="<?php echo $row['os']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                       Oerating System Icon: <input type="text" class="form-control" 
                                           name="os_icon" id="exampleInputPassword" placeholder="Operating System Icon"  value="<?php echo $row['os_icon']; ?>" required>
                                    </div>
                                    <div class="form-group" >
                                       Affilate Link: <input type="text" class="form-control" 
                                           name="link" id="exampleInputPassword" placeholder="Affilate Link"  value="<?php echo $row['link']; ?>" required>
                                    </div>
                                
                                    <input type='hidden' name="Edit-id" value="<?php echo $row['m_id']; ?>">
                                <div class="form-group row">
                                    
                                    
                                    
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
                                 <div class="form-group row pl-5" >
                                 <a href="http://localhost/newsboxx/Admin/category/shop/shop.php"class="btn btn-danger btn-user  col-sm-3 mb-3 mb-sm-0">Cancel</a>
                                <button type="submit" name="update-btn" class="btn btn-primary btn-user btn-block col-sm-3 mb-3 mb-sm-0">
                                    Update Record
                                </button>
                                </div>
                                
                            </form><?php } ?>
          </div>
</div>
                        
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>
    <script>
               
</body>

</html>