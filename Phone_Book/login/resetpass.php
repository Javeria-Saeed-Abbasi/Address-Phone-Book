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

    <title>Reset Password</title>
    <style>
    .reset-password-form label {
        color: #3488fc;
        font-weight:bold;
    }
    </style>
</head>
<body>
    <?php
    include('navbar.php');
    ?>
           <!--=========================== Reset Password Form =======================  -->
       <div class="container mt-3 " id="reset-password" >
           <center>
            <img src="../images/kontact.png" class="img-fluid"/>
        </center>
       </div>
       <div class="container border col-5 shadow-lg  p-3 mb-5 bg-white rounded">
    <div class="container pl-0 pr-0" >
        <form method="post" class="reset-password-form mx-auto"> 
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <a class="btn btn-light active" href="login.php" role="button">Login</a>
            
                <a class="btn btn-light" href="register.php" role="button">Sign Up</a>
              </div>        
              <br/> <br/> 
          <h3 class=" mb-3 font-weight-normal text-center">Reset Password</h3>
            
          <label for="inputPassword">Password</label>
          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <br/> 

         <label for="inputPassword">Re-Enter Password</label>
          <input name="re-enter-password" type="password" id="inputPassword" class="form-control" placeholder="Re-Enter Password" required>
          <br/>
          <button name="reset-password" class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>
          <br/>
        </form>
      </div>
    </div>
     <!-- ================= Footer  =============================== -->
    <?php
    include('loginfooter.php');
        ?>
</body>
</html>