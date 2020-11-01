<?php
require_once ('../db/config.php');
session_start();
if(empty($_SESSION['username'])){
  header('location:login/login.php');
}
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
    <!-- Animate.Css Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <title>About</title>
</head>
<style>
 /* #about-content{
        background: rgb(34,42,235);
background: linear-gradient(0deg, rgba(34,42,235,1) 21%, rgba(17,101,232,1) 42%, rgba(86,170,247,1) 91%);
      } */

</style>
<body>
    <?php
    include('includes/navbar.php');
    ?> 
<!-- ============= SideBar Wrapperc  ============ -->
<?php
include('includes/sidewrapper.php');
?>

    <!-- Second col -->
    <div class="col-8 col-md-10 col-lg-10 pt-2 bg-light overflow-auto" style="max-height:460px;">
    <div class="container bg-primary pt-5 pb-3">
    <div class="jumbotron bg-warning animate__animated animate__fadeInLeft animate__delay-1s">
         <div class="container text-justify ">
             <p>
                The <strong> Kontact</strong> work as <strong>“Online Phone and Address Book Management System”</strong> It will provide a complete solution to the management of personal contacts for people belonging to all age groups and all types of professions.
                <br/>You can easily and quickly search their desired contacts as compared to manual contacts.  
                <br/>You will be able to get their desire contacts without wasting much of their time and also can save their loved one contacts and addresses safely in a one place without much more effort. 
             </p>
         </div>
    </div>
    </div>
    </div> <!----// Sexcond Col------->
     <?php
    include('includes/footer.php');
    ?>
</body>
</html>
