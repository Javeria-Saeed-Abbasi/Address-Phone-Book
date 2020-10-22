<?php require_once('../db/config.php'); ?>
<?php
$_SESSION ($_GET['id']);
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
      $_SESSION['user_id'] = $id;
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['userphone'];
      $address= $_POST['address'];
      $city= $_POST['city'];
      $country= $_POST['country'];
      
      

        $sql = "INSERT INTO `users_contact` (firstname, lastname, email`, skills, designation, created_date) VALUES('$firstname', '$lastname', '$address', '$skills', '$designation', NOW())";       
        $result = mysqli_query($dbConn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            header('Location: ./index.php');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>