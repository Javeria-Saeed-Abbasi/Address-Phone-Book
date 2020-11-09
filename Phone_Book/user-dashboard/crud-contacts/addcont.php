<?php
 require_once('../../db/config.php'); 
session_start();
// $userID = $_SESSION['id'] ;
?>
<?php

// $_SESSION ($_GET['user-id']);

    if(isset($_POST['insertData']))
    {
      $userID =  $_SESSION['id'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['userphone'];
      $address= $_POST['address'];
      $city= $_POST['city'];
      $country= $_POST['country'];
      
      $query = "INSERT INTO `users_contact` ( `user-id`, `first-name`, `last-name`, `email`, `phone`, `address`, `city`, `country`) VALUES ( '$userID', '$firstname', '$lastname', '$email', '$phone',  '$address', '$city', '$country')";
        // $query = "INSERT INTO `users_contact` (`id`, `user-id`, `first-name`, `last-name`, email`, `phone`, `address`, `city` , `country`) VALUES ( NULL , '$firstname', '$lastname', '$address', '$city', '$country')";       
        $result = mysqli_query($dbConn, $query);

        if($result){
            echo "<script>alert('Records inserted successfully. ')</script>";
            header('Location: ../index.php');
            // echo session_id;
            exit;
        } else{
            echo "  ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
        }
        exit();

    }
?>