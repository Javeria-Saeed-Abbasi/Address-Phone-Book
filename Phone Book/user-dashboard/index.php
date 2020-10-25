<?php
require('../db/config.php');
session_start();
include('../db/config.php');
    // if($_SESSION['login']!==true){
    //     header('location:../login/login.php');
    // }
// $_SESSION['user-id'] = $userID;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awsome cdn link -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>User Dashboard</title>
<style>
#download-btn a:hover{
    background-color:#3488fc;
    color:#fff;
}
</style>

</head>
<body>

<?php
include('includes/navbar.php');
?>
<!-- ================================= Section =============================== -->
<?php
include('includes/sidewrapper.php');
?>
        <!-- ================ Content Div ==================== -->
        <div class="col-8 col-md-10 col-lg-10 pt-2 bg-light overflow-auto" style="max-height:460px;">
                    <div class="container jumbotron bg-primary shadow-lg w-100" >
                    <!-- Search bar -->
                        <form class="form-inline my-2 my-lg-0">
                        <div class="input-group w-50 mx-auto">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                        </form>
                <!-- //Search bar ends-->
                    
                    <!-- Buttons -->
                   
                    <div class="container">
                    <center>
                    <div class="btn-group pt-5  my-2 my-lg-0 ">
                    <a class="btn btn-light" href="newcontact.php" role="button">Add New Contact</a>
                    &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Download
                    </button>
                    <div class="dropdown-menu" id="download-btn">
                        <a class="dropdown-item text-center" href="#">.CSV</a>
                        <a class="dropdown-item text-center" href="#">.XSL</a>
                    </div>
                   
                    <!-- //button group div -->
                    </div>
                    <br/>
                    
                    <a class="btn btn-danger mt-3" href="#" role="button"><i class="fa fa-trash"></i>  Delete All</a>
                    </center>

</div>
              <!-- //jumbotorn ends div -->
                    </div>
                    <div class="container" id="contact-list">
                    <h3 class="text-center">CONTACT LIST</h3>
                    </div>
                    <!-- contact table -->
                    <div class="container shadow-lg pt-5 pb-5">
                    <table class="table table-striped table-responsive-sm">
                    <thead class="bg-primary text-white">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //  $_SESSION['user-id'] = $userID;
                        // $query = "select * from `users_contact` where `user-id` = '$userID'; ";

                        $query ="select * from `users_contact`; ";
                        $result = mysqli_query($dbConn,$query);
                        while($row= mysqli_fetch_array($result)){

                        ?>
                        <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['first-name']; ?></td>
                        <td><?php echo $row['last-name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td align="center">
							<a href="editcontact.php" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="#" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
						</td>
                        </tr>
                        
                    </tbody>
                    <?php
                        }
                        ?>
                    </table>
                    </div>
                    
              
        </div>
    </div>
    
</div>
<?php
include('includes/footer.php');
?>
</body>
</html>