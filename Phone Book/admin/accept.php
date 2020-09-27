<?php
require('../db/config.php');
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
    <title>Accepted Requests Page</title>
<style>
#download-btn a:hover{
    background-color:#3488fc;
    color:#fff;
}
</style>
</head>
<body>
<!--================ For Accept Request =========== -->
<?php
 $id = $_GET['id'];
 $query = "select * from `requests` where `id` = '$id'; ";
 $result = mysqli_query($dbConn,$query);
 if(mysqli_num_rows($result) > 0 ){
     while($row = mysqli_fetch_assoc($result)){
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
            $status = $row['status'];
            $query = "INSERT INTO `registered_users` (`id`, `username`, `email`, `password`, `date`) VALUES (NULL, '$username', '$email', '$password', CURRENT_TIMESTAMP);";
     }
     $query2 .= "UPDATE `requests` SET `status`='accepted'  WHERE `requests`.`id` = '$id';";
     $result = mysqli_query($dbConn, $query2);
     if (mysqli_query($dbConn,$query2)) {
         echo "<div> Account has been accepted </div>";
     } else {
        echo "ERROR: Could not able to execute $query2. " . mysqli_error($dbConn);
     }
     
 }
 
 
?>
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
                    <br/><br/>
                    <!-- Buttons -->
                   
                    <div class="container">
                    <center>
                    <div class="btn-group   my-2 my-lg-0 ">
                    <!-- <a class="btn btn-light" href="newcontact.php" role="button">Add New User</a> -->
                    <!-- &nbsp;&nbsp;&nbsp; -->
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Download
                    </button>
                    <div class="dropdown-menu" id="download-btn">
                        <a class="dropdown-item text-center" href="#">.CSV</a>
                        <a class="dropdown-item text-center" href="#">.XSL</a>
                    </div>
                   
                    <!-- //button group div -->
                    </div>                    
                    <a class="btn btn-danger" href="#" role="button"><i class="fa fa-trash"></i>  Delete All</a>
                    </center>

</div>
              <!-- //jumbotorn ends div -->
                    </div>
                    <div class="container" id="users-list">
                    <h3 class="text-center">User Requests</h3>
                    </div>
                    <!-- Requests contact table -->
                    <div class="container shadow-lg pt-5 pb-5 bg-warning overflow-auto">
                    
                    </div>
                    
              
        </div>


<?php
include('includes/footer.php');
?>
</body>
</html>