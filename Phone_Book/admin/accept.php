<?php
require('../db/config.php');
session_start();
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
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone= $_POST['phone'];
        $city= $_POST['city'];
        $country= $_POST['country'];
        $address= $_POST['address'];
        $sec_ques = $_POST['sec_question'];
        $sec_answ = $_POST['sec_answer'];  
        $status = $row['status'];
        $query = "INSERT INTO `registered_users` (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_ques`,`sec_ans`,`date`) VALUES (NULL, '$profilepic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
    }
     $query2 .= "UPDATE `requests` SET `status`='accepted'  WHERE `requests`.`id` = '$id';";
     $result = mysqli_query($dbConn, $query2);
     if (mysqli_query($dbConn,$query2)) {
         echo "<div> Account has been accepted </div>";
     } else {
        echo "ERROR: Could not able to execute $query2. " . $dbConn->error; //mysqli_error($dbConn)
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

<!-- ==================== //Accepeted Requests page =============================-->
                    <?php
      
                $query = "select * from `requests`;";
                $result = mysqli_query($dbConn,$query);
                if($result->num_rows>0){
                    //      $row = $result->fetch_assoc();
                    while($row= mysqli_fetch_array($result)){
                      if($row['status']== 'accepted'){
                      
                        ?>
                        <center>
                        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Accept</th>
      <th scope="col">Reject</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><small><i><?php echo $row['date'] ?></i></small></td>
      <td><button class="btn btn-success my-2"><?php echo $row['status']?></button></td>
      <td></td>
      <td></td>

      
    </tr>
  </tbody>
</table>
                </center>
            <?php
                }
                        }

                }else{
                    echo "No Pending Requests.";
                }
            ?>
<!-- ====================== Accept Page Ending =============== -->
                    </div>
                    
              
        </div>


<?php
include('includes/footer.php');
?>
</body>
</html>