<?php
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

    <title>Verification Email</title>
</head>
<body>
<?php

 if(isset($_POST['email_verify'])){
$email = $_POST['email'];
$query = "SELECT * FROM  `registered_users` WHERE `email` = '$email'; " ;
$result = mysqli_query($dbConn, $query);
if ($result->num_rows > 0) {
  // echo "record verify"; 
  echo "<script>alert('Email verified.')</script>" ; 	
  header("location:resetpass.php");
}else
{
  echo "<script>alert('Email not Found'.)</script>";
}

}
?>
    <?php
    include('navbar.php');
    ?>
    <!-- =================== Forgot Password Form ================== -->
    
     <!--=========================== Login Form =======================  -->
       <div class="container mt-3 ">
           <center>
            <img src="../images/kontact.png" class="img-fluid"/>

        </center>
          <br/>
       </div>
       <div class="container border col-5 shadow-lg  p-3 mb-5 bg-white rounded">
    <div class="container pl-0 pr-0" id="email-verify-form">
        <form method="POST" action="<?php echo ($_SERVER['PHP_SELF'])?>" class=" mx-auto"> 
              <br/>

          <h3 class=" mb-3 font-weight-normal text-center">Email Verification</h3>
          <br/>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <br/>

          <button name="email_verify" class="btn btn-lg btn-primary btn-block" type="submit">Verify</button>
          <br/>
        </form>
      </div>
    </div>
    <!-- ========================  Footer =========================== -->
<?php
    include('loginfooter.php');
    ?>
</body>
</html>