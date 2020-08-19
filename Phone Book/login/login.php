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

    </style>
</head>
<body>
    <header class="sticky-top" id="first-nav">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3488fc;">
         <a class="navbar-brand" href="#"><img src="../images/logocopy.png" height="50px" alt="My responsive image."/></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mx-auto">
             <li class="nav-item active">
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">About Us</a>
             </li>
             <!-- <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Dropdown
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Something else here</a>
               </div>
             </li> -->
             <li class="nav-item">
               <a class="nav-link" href="#">Contact Us</a>
             </li>
           </ul>
       </nav>
       </header>
       <!--=========================== Login Form =======================  -->
       <div class="container mt-3 " id="login-wrapper">
           <center>
            <img src="../images/kontact.png" class="img-fluid"/>
            <h2 class="mt-3">WELCOME</h2>
        </center>
          
       </div>
       <div class="container border col-5 shadow-lg  p-3 mb-5 bg-white rounded">
    <div class="container pl-0 pr-0" id="login-form">
        <form method="post" class="form-signin mx-auto text-center"> 
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <a class="btn btn-light active" href="login.php" role="button">Login</a>
                <!-- <button type="button" class="btn btn-light active">Login</button> -->
                <a class="btn btn-light" href="register.php" role="button">Register</a>
              </div>        
              <br/><br/> 
          <h3 class=" mb-3 font-weight-normal">Please sign in</h3>
            
          <label for="inputUsername" class="sr-only">Username</label>
          <input name="username" type="text" id="inputname" class="form-control" placeholder="Username" required autofocus>
          <br/>
          <!-- <label for="inputEmail" class="sr-only">Email address</label>
          <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <br/> -->
          <label for="inputPassword" class="sr-only">Password</label>
          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <br/>
          <button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <br/>
          <!-- <a href="signup.php" class="mt-5 mb-3 text-secondary">Create an account</a> -->
          <a href="#" class="mt-5 mb-3 text-danger">Forgot Password?</a>
 
        </form>
      </div>
    </div>
    <!-- ================= Footer  =============================== -->
    <?php
    include('loginfooter.php');
        ?>
</body>
</html>