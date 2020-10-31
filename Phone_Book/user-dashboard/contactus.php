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
    <!-- Animate.Css Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <title>Contact Us</title>
</head>
<style>


</style>
<body>
<?php
if (isset($_POST['submit'])) {

if($_SERVER['REQUEST_METHOD']=="POST") {
$fname = $_POST['fname'];
$lname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `contact_us`(`id`, `first_name`, `last_name`, `email`, `message` , `date`) VALUES ( NULL , '".$fname."' , '".$lname."' , '".$email."' , '".$message."' , CURRENT_TIMESTAMP )";
if ($dbConn->query($query)) {
   echo "INSERTED".$dbConn->error; 
}
else{
    echo "not inserted";
}
}

}
?>

    <?php
    include('includes/navbar.php');
    ?> 
<!-- ============== Side Bar ============= -->
<?php
        include('includes/sidewrapper.php');

    ?>
    <!-- =================== Content ================= -->
    <div class="col-8 col-md-10 col-lg-10 pt-2 bg-light overflow-auto" style="max-height:460px;">
    <div class="container bg-primary pt-3 pb-2">
    <div class="jumbotron bg-warning animate__animated animate__fadeInLeft animate__delay-1s">
         <div class="container text-justify ">
         <form id="contact-form" method="POST" action="contactus.php" role="form">



    
<h3 class="display-4 text-primary text-center">CONTACT US</h3>
<br/>
    <div class="controls col-md-6 col-lg-6 mx-auto">

     
            <div class="col-md-12">
                <div class="form-group cont-text">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname*"   data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group cont-text">
                    <label for="form_lastname">Lastname </label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname (optional)">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        
            <div class="col-md-12">
                <div class="form-group cont-email">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
            <div class="col-md-12">
                <div class="form-group cont-mesg">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Enter your Message *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-danger btn-send" value="Send message">
            </div>
      

</form>


 
<br/>

</div>

         </div>
    </div>
    </div>
    </div> <!----// Sexcond Col------->
     <?php
    include('includes/footer.php');
    ?>
</body>
</html>
