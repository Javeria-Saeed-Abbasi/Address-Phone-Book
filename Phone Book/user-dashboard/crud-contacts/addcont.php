<?php
 require_once('../../db/config.php'); 
session_start();
?>
<?php
// $_SESSION['user-id'] = $userID;
// $_SESSION ($_GET['user-id']);

    // $_GET['id']= $id;
    if(ISSET($_POST['insertData']))
    {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['userphone'];
      $address= $_POST['address'];
      $city= $_POST['city'];
      $country= $_POST['country'];
      
      

        $sql = " INSERT INTO `users_contact` (`id`, `user-id`, `first-name`, `lastname`, email`, `phone`, `address`, `city` , `country`) VALUES ( NULL , '$firstname', '$lastname', '$address', '$city', '$country')";       
        $result = mysqli_query($dbConn, $sql);

        if(mysqli_query($dbConn,$query)){
            echo "<script>alert('Records inserted successfully.')</script>";
            header('Location: ./index.php');
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
        }
       
    }
?>