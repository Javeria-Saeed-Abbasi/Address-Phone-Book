<?php
require_once ('../db/config.php');
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

    <title>Update Request By Admin</title>
    <style>
        #register-wrapper h2{
            color: #3488fc;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }
         #register-form h3{
            color: #3488fc;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif

        }
        #register-form .form-control{
            border-radius: 10%;
        }

        .avatar-pic {
            width: 80px;
            cursor: pointer;
        }
        #register-form label{
          color: #3488fc;
          font-weight:bold;
        }
    </style>
</head>
<body>
<?php

 if(isset($_POST['updateRequest']))
 {
  $id = $_POST['id'];
      // $profilepic = $_POST['profileavatar'];
      $username = $_POST['updateUsername'];
      $email = $_POST['updateEmail'];
      $password = $_POST['updatePassword'];
      $phone= $_POST['updatePhone'];
      $city= $_POST['updateCity'];
      $country= $_POST['updateCountry'];
      $address= $_POST['updateAddress'];
      $sec_ques = $_POST['updateSec_question'];
      $sec_answ = $_POST['updateSec_answer'];

      //For Authentication of unique Username and Email:
    $query_username = "SELECT * FROM `registered_users` WHERE username ='.$username.'";
    $query_email = "SELECT * FROM `registered_users` WHERE email ='.$email.'";
    $res_u = mysqli_query($dbConn,  $query_username);
    $res_e = mysqli_query($dbConn, $query_email);
    
    if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
      $query = "UPDATE `requests` SET `username`=".$username.",`email`=".$email.",`password`=".$password.",`phone`=".$phone.",`city`= ".$city.",`country`=".$country.",`address`=".$address.",`sec_question`=".$sec_ques.",`sec_answer`=".$sec_answ.", WHERE `id` =".$id."; ";
// (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_ques`,`sec_ans`,`date`) VALUES (NULL, '$profilepic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
           $result = mysqli_query($dbConn, $query);
           if(mysqli_query($dbConn,$query)){
            echo "<script>alert('Data Updated successfully.')</script>";
            header("location:requests.php");
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
        }
        exit();
    }
  }
?>

<?php
include('includes/navbar.php');
?>
<!-- =============== Side Bar wrapper =================== -->
<?php
    include('includes/sidewrapper.php');
    ?> 
       <!--=========================== Login Form =======================  -->
       <div class="col-8 col-md-10 col-lg-10 pt-2 bg-light overflow-auto" style="max-height:460px;">
       <div class="container mt-3 " id="register-wrapper">
           <center>
            <img src="../images/kontact.png" class="img-fluid"/>
            <h2 class="mt-3">WELCOME</h2>
        </center>
          
       </div>
       <div class="container border col-5 shadow-lg  p-3 mb-5 bg-white rounded">
    <div class="container pl-0 pr-0" id="register-form">
        <div class="form-signin mx-auto text-center"> 
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <!-- <a class="btn btn-light" href="login.php" role="button">Login</a> -->
                <!-- <button type="button" class="btn btn-light active">Login</button> -->
                <a class="btn btn-light active" href="#" role="button">Update Request</a>
              </div>        
              <br/><br/> 
          <h3 class=" mb-3 font-weight-normal">Update Request</h3>
          </div>
<?php
$id = $_GET['id'];
$query="SELECT * FROM `requests` WHERE id=$id";
$results = mysqli_query($dbConn, $query);
  while($row=mysqli_fetch_array($results))
  {
  ?>
          <form class="md-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
          <center>
          <div class="file-field">
    <div class="mb-2">
      <img src="../images/upload img.png" onClick="triggerClick()" id="profileDisplay" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
    </div>
 
    <div class="d-flex justify-content-center">
      <div class="  float-left">
        <!-- <span>Add photo</span> -->
        <!-- <input type="file"  name="profileavatar" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;"> -->
      </div>
    </div>
  </div>
  </center>
  <div id="error_msg" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  <div class="form-group">
    <label for="inputUsername" >Username</label>
    <input type="text" name="updateUsername" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>  
	  <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
  	</div>
  </div>
<!-- <div id="error_msg" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>></div>
<div class="form-group">
    <label for="inputUsername" >Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>  
    <span></span>
    </div> -->
    <div id="error_msg" <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
	  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="updateEmail" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
	  <?php if (isset($email_error)): ?>
	  	<span><?php echo $email_error; ?></span>
	  <?php endif ?>
  	</div>
  </div>
<!-- <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <span></span>
  </div> -->
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="updatePassword" value="<?php echo $row['password']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group ">
  <label for="form_phone" class=" col-form-label">Phone</label>
    <input class="form-control" name="updatePhone" value="<?php echo $row['phone'];?>" type="tel" placeholder="+92-12345678" id="form_phone">
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text"  name="updateCity" value="<?php echo $row['city']; ?>" class="form-control" id="inputCity" placeholder="Karachi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCountry">Country</label>
      <input type="text"  name="updateCountry" value="<?php echo $row['country']; ?>" class="form-control" id="inputCountry" placeholder="Pakistan">
    </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="updateAddress" id="inputAddress" placeholder="1234 Main St">
  </div>
 <div class="form-group">
      <label>Secret Question</label>
      <select class="form-control"   name="updateSec_question" required>
        <option><?php echo $row['sec_question'];?></option>
        <option value="What is your pet name?">What is your pet name?</option>
        <option value="Which is your favourite movie?" >Which is your favourite movie?</option>
        <option value="Who is your favourite cricketer?" >Who is your favourite cricketer?</option>
      </select>
    </div>
    <div class="form-group">
    <label for="inputtext">Secret Answer</label>
    <input type="text" value="<?php echo $row['sec_answer']; ?>" name="updateSec_answer" class="form-control" id="inputtext" placeholder="Shahid Afridi">
  </div>
<center>
  <button type="submit" name="updateRequest" value="<?php echo $row['id']; ?>" class="btn btn-primary" >UPDATE</button>
  <br/><br/>
 </center>
 <?php
  }
 ?>
        </form>
      </div>
    </div>

    </div> <!------//second col div ends here---------->
    
        <!-- ================= Footer  =============================== -->
    <?php
    include('includes/footer.php');
        ?>
</body>

<script src="js/script.js"></script>
</html>