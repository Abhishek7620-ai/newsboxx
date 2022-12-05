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

    <title>Newsboxx Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" id="page-top ">

    <!-- Page Wrapper -->
    <div id="wrapper">


<?php
include("../sidebar.php");
?>

<!-- End of Sidebar -->
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
                    <span class="badge badge-danger badge-counter">8+</span>
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
                            <img class="rounded-circle" src="../img/undraw_profile_1.svg"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="../img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="../img/undraw_profile_3.svg"
                                alt="...">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
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
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
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

                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">                    
                    <?php echo $_SESSION['email']; ?>
                    </span>

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
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Upcoming Device Page Content.</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post Records.</h6>
                
                <button class="m-10  btn btn-primary" name="newpost" style="margin-left:85%;" data-toggle="modal" data-target="#exampleModal1">Add New Post</button>
                

                <!-- Button trigger modal -->
                

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="exampleModalLabel">Add New Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="addpost.php" method="POST">
                    <div class="modal-body" >
                   
                         
                                    <div class="form-group">
                                       Image: <input type="text" class="form-control" name="image" 
                                            placeholder="image Path"  required>
                                    </div>
                                    <div class="form-group">
                                        Image Title: <input type="text" class="form-control" name="img_title" 
                                            placeholder="Image Title Tag"  required>
                                    </div>
                                
                                <div class="form-group">
                                    Image Altertag: <input type="text" class="form-control" name="img_alt"3
                                        placeholder="Image Alter Tag" required>
                                </div>

                                   
                                    <div class="form-group" >
                                       Heading: <input type="text" class="form-control" 
                                           name="heading" placeholder="Heading"   required>
                                    </div>

                                    <div class="form-group" >
                                       Slug: <input type="text" class="form-control" 
                                           name="slug" placeholder="SLUG"   required>
                                    </div>

                                    <div class="form-group" >
                                       News: <textarea class="form-control" id="exampleFormControlTextarea1"  
                                           name="news" placeholder="News"  required></textarea>
                                    </div>
                                    <div class="form-group" >
                                    <label for="category">Category</label>
                                    <select class="form-control"  name="category" required>
                                        <option hidden >Select Category</option>
                                        <option value="Mobile News">Mobile News</option>
                                        <option value="Esports">Esports</option>
                                        <option value="Telecome">Telecome</option>
                                        <option value="Electic Vehicle">Electric Vehicle</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="APP News">App News</option>
                                        <option value="E-Lerning">E-Lerning</option>
                                        <option value="OTT Platform">OTT Platform</option>
                                        <option value="Laptop">Laptop</option>
                                        <option value="Computer">Computer</option>
                                        <option value="Technology">Technology</option>
                                    </select>
                                    </div>
                                    
                                    <div class="form-group" >
                                        Tags: <input type="text" class="form-control" 
                                           name="tag" placeholder="Tags"  required>
                                    </div>
                                    <div class="form-group" >
                                       Date: <input type="date" class="form-control" 
                                           name="date" placeholder="Date"   required>
                                    </div>
                                    <div class="form-group" >
                                        Author: <input type="text" class="form-control" 
                                           name="author" placeholder="Author Name"  required>
                                    </div>
                                    
                               
                            
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addpost-btn">Add Post</button>
                    </div>
                    </from>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        
                            <tr>
                            
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>No</th>
                                <th>Image</th>
                                <th>Img_Title</th>
                                <th>Img_Alt</th>
                                <th>Heading</th>
                                <th>Slug</th>
                                <th>News</th>
                                <th>Category</th>
                                <th>Tag</th>
                                <th>Date</th>
                                <th>Date_Time</th>
                                <th>Author</th>
                                <th>Views</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>No</th>
                                <th>Image</th>
                                <th>Img_Title</th>
                                <th>Img_Alt</th>
                                <th>Heading</th>
                                <th>Slug</th>
                                <th>News</th>
                                <th>Category</th>
                                <th>Tag</th>
                                <th>Date</th>
                                <th>Date_Time</th>
                                <th>Author</th>
                                <th>Views</th>
                            </tr>
                        </tfoot>
                        

                        <tbody>
                        <?php 
                        $conn = mysqli_connect('localhost','root','','new-boxx');
                        $query="SELECT * FROM `upcoming-device` ORDER BY `date_time` DESC;";
                        $query_run = mysqli_query($conn,$query);
                        $i = '0';
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $i++;
                        ?>
                            <tr>
                            <td> 
                                <form action="ud_edit.php" method="POST">
                                <input type='hidden' name="edit_id" value="<?php echo $row['u_id']; ?>">
                                <button class="btn btn-info" name="edit_btn" type="submit">Edit</button>
                                </form>
                                </td>
                                <td>
                                <form action="ud_deletecode.php" method="POST">
                                <input type='hidden' name="edit_id" value="<?php echo $row['slug']; ?>">
                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"  type="button">Delete</button>
                                </form>
                                </td>
                                
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['image']; ?></td>
                                <td><?php echo $row['img_title']; ?></td>
                                <td><?php echo $row['img_alt']; ?></td>
                                <td><?php echo substr ($row['heading'],0,30)."..."; ?></td>
                                <td><?php echo substr ($row['slug'],0,30)."..."; ?></td>
                                <td><?php echo substr ($row['news'],0,30)."..."; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo substr ($row['tag'],0,30)."..."; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['date_time']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                                <td><?php echo $row['views']; ?></td>
                               
                                </tr>
                               
                                <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are You Sure You Want To Delete This Record ?
                                </div>
                                <div class="modal-footer">
                                <form action="ud_deletecode.php" method="POST">
                                    <input type='hidden' name="delete_id" value="<?php echo $row['slug']; ?>">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    <button type="submit" name="delete-btn" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                                
                            
                            <?php 
                              }
                               }
                               else
                               {
                                echo 'NO Records Found';
                               } 
                              
                               ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Newsboxx.in 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
</div>
</div>
</div>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
<div class="dmtop">Scroll to Top</div>
</script>
<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../js/demo/datatables-demo.js"></script>

 <!-- Core JavaScript
    ================================================== -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/tether.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/custom.js"></script>

</body>

</html>