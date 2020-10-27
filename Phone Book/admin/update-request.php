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
// $username = "";
// $email = "";
 if(isset($_POST['addUser']))
 {
      // $profilepic = $_POST['profileavatar'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $phone= $_POST['phone'];
      $city= $_POST['city'];
      $country= $_POST['country'];
      $address= $_POST['address'];
      $sec_ques = $_POST['sec_question'];
      $sec_answ = $_POST['sec_answer'];

      //For Authentication of unique Username and Email:
    $query_username = " SELECT * FROM `registered_users` WHERE username ='$username'";
    $query_email = " SELECT * FROM `registered_users` WHERE email ='$email'";
    $res_u = mysqli_query($dbConn,  $query_username);
    $res_e = mysqli_query($dbConn, $query_email);
    
    if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
      $query = "INSERT INTO `registered_users` (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_ques`,`sec_ans`,`date`) VALUES (NULL, '$profilepic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
           $results = mysqli_query($dbConn, $query);
           if(mysqli_query($dbConn,$query)){
            echo "<script>alert('Records inserted successfully.')</script>";
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
          <form class="md-form" action="adduser.php" method="post" enctype="multipart/form-data">
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
    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>  
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
    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
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
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group ">
  <label for="form_phone" class=" col-form-label">Phone</label>
    <input class="form-control" name="phone" type="tel" placeholder="+92-12345678" id="form_phone">
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text"  name="city"  class="form-control" id="inputCity" placeholder="Karachi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCountry">Country</label>
      <input type="text"  name="country" class="form-control" id="inputCountry" placeholder="Pakistan">
    </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
 <div class="form-group">
      <label>Secret Question</label>
      <select class="form-control" name="sec_question" required>
        <option selected>Choose...</option>
        <option>What is your pet name?</option>
        <option>Which is your favourite movie?</option>
        <option>Who is your favourite cricketer?</option>
      </select>
    </div>
    <div class="form-group">
    <label for="inputtext">Secret Answer</label>
    <input type="text" name="sec_answer" class="form-control" id="inputtext" placeholder="Shahid Afridi">
  </div>
<center>
  <button type="submit" name="addUser" class="btn btn-primary" >UPDATE</button>
  <br/><br/>
 </center>
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