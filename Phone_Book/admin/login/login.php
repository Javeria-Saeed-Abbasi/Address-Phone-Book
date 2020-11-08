<?php
include ('../../db/config.php');
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

    <title>Login</title> 
    <style>
        #login-wrapper h2{
            color: #3488fc;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }
         #login-form h3{
            color: #3488fc;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif

        }
        #login-form .form-control{
            border-radius: 10%;
          }

        #login-form label{
          color: #3488fc;
          font-weight:bold;
        }
    </style>
</head>
<body>
<?php

if (isset($_POST['signin']))
{
  $username= $_POST['username'];
  $password= $_POST ['password'];

$query = "SELECT * from `admin` WHERE  username = '".$username."' AND  password ='".$password."' ;";
// if ($result=$dbConn->query($query)) {}
$result = mysqli_query ($dbConn , $query);   

if ($result->num_rows > 0) {
while($rows= mysqli_fetch_array($result)){
  
  $_SESSION['id'] = $rows['id'];
  // $_SESSION['message'] = "You are logged in";
  $_SESSION['username'] = $username ;

  header("location:../index.php");
  }
} 

else{
  echo "<script> alert('Username Or Password is incorrect') </script>";
  // echo "ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
}
// else { "query unsucessful". $dbConn->error;

}
 

// if (isset($_POST['signin']))
// {
//   $username= $_POST['username'];
//   $password= $_POST ['password'];

// $query = "SELECT * from `admin` WHERE  `username` = '".$username."' AND `password` ='".$password."' ;";
// // if ($result=$dbConn->query($query)) {}
// $result =$dbConn->query($query) ;    
//   if($result->num_rows>0)  

//   {

//      $row = $result->fetch_assoc();
      
     
//       $_SESSION['username'] = $row['username'];
    
//       $_SESSION['password'] = $row['password'];
//        header("Location:./index.php"); 
//   }
//   else
//   {

//      echo "Username/Password is incorrect";
//   }

// }
// else { "query unsucessful". $dbConn->error;
// }

?>
    <?php
    include('navbar.php');
    ?>
       <!--=========================== Login Form =======================  -->
       <div class="container mt-3 " id="login-wrapper">
           <center>
            <img src="../../images/kontact.png" class="img-fluid"/>
            <h2 class="mt-3">WELCOME</h2>
        </center>
          
       </div>
       <div class="container border col-5 shadow-lg  p-3 mb-5 bg-white rounded">
    <div class="container pl-0 pr-0" id="login-form">
        <form action="login.php" method="POST" class="form-signin mx-auto"> 
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <a class="btn btn-light active" href="login.php" role="button">Login</a>
                <!-- <button type="button" class="btn btn-light active">Login</button> -->
                <!-- <a class="btn btn-light" href="register.php" role="button">Sign Up</a> -->
              </div>        
              <br/><br/> 
          <h3 class=" mb-3 font-weight-normal text-center">Please sign in</h3>
            
          <label for="inputUsername" >Username</label>
          <input name="username" type="text" id="inputname" class="form-control" placeholder="Username" required autofocus>
          <br/>
          <!-- <label for="inputEmail" class="sr-only">Email address</label>
          <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <br/> -->
          <label for="inputPassword" >Password</label>
          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <br/>
          <button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <br/>
          <center>
          <a href="verification.php" class="mt-5 mb-3 text-danger">Forgot Password?</a>
          </center>
        </form>
      </div>
    </div>
    <!-- ================= Footer  =============================== -->
    <?php
    include('loginfooter.php');
        ?>
</body>
</html>