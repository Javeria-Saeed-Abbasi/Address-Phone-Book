<?php
session_start(); 
require_once ('../db/config.php');
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

    <title>Register</title>
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
 if(isset($_POST['signup']))
 {
      $profilepic = $_POST['profileavatar'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $phone= $_POST['phone'];
      $city= $_POST['city'];
      $country= $_POST['country'];
      $address= $_POST['address'];
      $sec_ques = $_POST['sec_question'];
      $sec_answ = $_POST['sec_answer'];
  
    $query = "INSERT INTO `requests` (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_question`,`sec_answer`,`date`) VALUES (NULL, '$profilepic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";

     $result = mysqli_query($dbConn,$query);

     if(mysqli_query($dbConn,$query)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
  }
   
 }
 
//   if($_SERVER["REQUEST_METHOD"] == "POST")
//   {
 
//     $profilePic = $_POST['profileImage'];
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $phone= $_POST['phone'];
//     $city= $_POST['city'];
//     $country= $_POST['country'];
//     $address= $_POST['address'];
//     $sec_ques = $_POST['sec_question'];
//     $sec_answ = $_POST['sec_answer'];

//     $query = "INSERT INTO `requests` (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_question`,`sec_answer`,`date`) VALUES (NULL,'$profilePic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";

// echo $query;      
//   if ($dbConn->query($query) === TRUE) {
//     echo "<script>alert('Your account request is now pending for approval by admin. Please wait for confirmation. Thank you.')</script>";
// } else {
//     echo "Error: " . $query . "<br>" . $dbConn->error;
// }
// }
//  if(isset($_POST['signup'])){
//   $profilePic = $_POST['profileImage'];
//   $username = $_POST['username'];
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   $phone= $_POST['phone'];
//   $city= $_POST['city'];
//   $country= $_POST['country'];
//   $address= $_POST['address'];
//   $sec_ques = $_POST['sec_question'];
//   $sec_answ = $_POST['sec_answer'];

  

  
//   // $message = "$lastname $firstname would like to request an account.";
//   $query = "INSERT INTO `requests` (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_question`,`sec_answer`,`date`) VALUES (NULL,'$profilePic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
//   if(performQuery($query)){
//       echo "<script>alert('Your account request is now pending for approval by admin. Please wait for confirmation. Thank you.')</script>";
//   }else{
//       echo "<script>alert('Username or Email Already exists.')</script>";
//   }
// }
?>
<?php
include('navbar.php');
?>
       <!--=========================== Login Form =======================  -->
       <div class="container mt-3 " id="register-wrapper">
           <center>
            <img src="../images/kontact.png" class="img-fluid"/>
            <h2 class="mt-3">WELCOME</h2>
        </center>
          
       </div>
       <center>
       <div class="container border col-5 shadow-lg  p-3 mb-5 bg-white rounded">
    <div class="container pl-0 pr-0" id="register-form">
        <div  class="container mx-auto text-center"> 
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <a class="btn btn-light" href="login.php" role="button">Login</a>
                <!-- <button type="button" class="btn btn-light active">Login</button> -->
                <a class="btn btn-light active" href="register.php" role="button">Sign Up</a>
              </div>        
              <br/><br/> 
          <h3 class=" mb-3 font-weight-normal">Sign Up</h3>
         </div>
          <form class="md-form"  method="post" enctype="multipart/form-data">
  <div class="file-field">
    <div class="mb-2">
      <img src="../images/upload img.png" onClick="triggerClick()" id="profileDisplay" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
    </div>
    <div class="d-flex justify-content-center">
      <div class="  float-left">
        <!-- <span>Add photo</span> -->
        <input type="file"  name="profileavatar" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
      </div>
    </div>
  </div>

<div class="form-group">
    <label for="inputUsername" >Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group ">
  <label for="form_phone" class=" col-form-label">Phone</label>
    <input class="form-control" name="phone" type="tel" placeholder="+92-12345678" id="form_phone" required> 
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city"  id="inputCity" placeholder="Karachi" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCountry">Country</label>
      <input type="text" class="form-control" name="country" id="inputCountry" placeholder="Pakistan" required>
    </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" required>
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
    <input type="text" name="sec_answer" class="form-control" id="inputtext" placeholder="Shahid Afridi" required>
  </div>
  </center>
<center>
  <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
  <br/><br/>
 </center>
        </form>
      </div>
    </div>
    <!-- ================= Footer  =============================== -->
    <?php
    include('loginfooter.php');
        ?>
</body>
<script src="js/script.js"></script>
</html>