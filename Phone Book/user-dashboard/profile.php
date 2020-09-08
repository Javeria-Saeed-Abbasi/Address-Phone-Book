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
    <title>User Profile Page</title>
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
				
				<div class=" col-md-8 col-lg-6 mx-auto bg-warning" id="edit-userprofile" >
<form class="md-form" method="post" enctype="multipart/form-data" id="profile-form">
  <div class="file-field">
    <div class="mb-2">
     <center> <img src="../images/upload img.png" onClick="triggerClick()" id="profileDisplay" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar"></center>
    </div>
    <div class="d-flex justify-content-center">
      <div class="  float-left">
        <!-- <span>Add photo</span> -->
        <input type="file"  name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
      </div>
    </div>
  </div>

<div class="form-group">
    <label for="inputUsername" >Username</label>
    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group ">
  <label for="form_phone" class=" col-form-label">Phone</label>
    <input class="form-control" type="tel" placeholder="+92-12345678" id="form_phone">
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Karachi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCountry">Country</label>
      <input type="text" class="form-control" id="inputCountry" placeholder="Pakistan">
    </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
      <label>Secret Question</label>
      <select class="form-control">
        <option selected>Choose...</option>
        <option>What is your pet name?</option>
        <option>Which is your favourite movie?</option>
        <option>Who is your favourite cricketer?</option>
      </select>
    </div>
    <div class="form-group">
    <label for="inputtext">Secret Answer</label>
    <input type="text" class="form-control" id="inputtext" placeholder="Shahid Afridi">
  </div>
<center>
  <button type="submit" class="btn btn-primary">Save</button>
  <br/><br/>
 </center>
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