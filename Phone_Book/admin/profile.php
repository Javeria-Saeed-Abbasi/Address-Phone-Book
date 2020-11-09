<?php
require('../db/config.php');
session_start();
if(empty($_SESSION['username'])){
  header('location:login/login.php');
}
$id = $_SESSION['id'];
var_dump($id);
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
    <title>Admin Profile Page</title>
<style>
.avatar-pic {
            width: 80px;
            cursor: pointer;
        }
        #profile-form label{
          color: #3488fc;
          font-weight:bold;
        }
</style>
</head>
<body>
<?php
if(isset($_POST['profileUpdate'])){
  $id = $_SESSION['id'];
//    $contact_id = $_POST['contact_id'];
$username = $_POST['updateUsername'];
$email = $_POST['updateEmail'];
$password = $_POST['updatePassword'];

  
  
$query = "UPDATE `admin` SET `username`='".$username."',`email`='".$email."',`password`='".$password."' WHERE `id` ='".$id."'; ";
$result = mysqli_query($dbConn, $query);
if($result){
 
 echo '<script> alert("Data Updated Successfully."); </script>';
 header("Location:index.php");
}
else  {
   echo '<script> alert("Data Not Updated"); </script>' .$dbConn->error;  

}	
exit();
}
?>
<?php
include('includes/navbar.php');
?>
<!-- ============ Side Bar Wrapper ================== -->
<?php
include('includes/sidewrapper.php');
?>
<!-- ================= Profile Edit Form ================== -->
<div class="col-8 col-md-10 col-lg-10 pt-2 bg-light overflow-auto" style="max-height:460px;">
<div class="card bg-primary" >
			<!-- <div class="card-header">
			<strong>Username</strong> 
				<a href="index.php" class="float-right btn btn-dark btn-sm">
				<i class="fa fa-fw fa-globe"></i>	Contact List</a>
			 </div> -->
			<div class="card-body">
				
				<div class=" col-md-8 col-lg-6 mx-auto bg-warning" id="edit-admin-profile" >
        <?php
				$id = $_SESSION['id']; 
				$query="SELECT * FROM `admin` WHERE id='$id'; ";
				$results = mysqli_query($dbConn, $query);
				while($rows = mysqli_fetch_array($results))
				{
  					?>
<form class="md-form" action="profile.php?id=<?= $id; ?>" method="post" id="admin-profile-form">
<div class="form-group">
    <label for="inputUsername" >Username</label>
    <input type="text" name="updateUsername" value="<?php echo $rows['username']; ?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  name="updateEmail" value="<?php echo $rows['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="updatePassword" value="<?php echo $rows['password']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<center>
  <button type="submit" name="profileUpdate" class="btn btn-primary">Save</button>
  <br/><br/>
 </center>
 <?php
        }
 ?>
        </form>

</div>
</div>
</div>
      </div> <!----//Second Col div --------->
      <?php
include('includes/footer.php');
?>
</body>
<script src="js/script.js"></script>
</html>