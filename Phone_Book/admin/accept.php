<?php
require('../db/config.php');
?>
<!--================ For Accept Request =========== -->
<?php
 $id = $_GET['id'];
 $query = "select * from `requests` where `id` = '$id'; ";
 $result = mysqli_query($dbConn,$query);
 if(mysqli_num_rows($result) > 0 ){
     while($row = mysqli_fetch_assoc($result)){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone= $_POST['phone'];
        $city= $_POST['city'];
        $country= $_POST['country'];
        $address= $_POST['address'];
        $sec_ques = $_POST['sec_question'];
        $sec_answ = $_POST['sec_answer'];  
        $status = $row['status'];
        $query = "INSERT INTO `registered_users` (`id`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_ques`,`sec_ans`,`date`) VALUES (NULL, '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
    }
     $queryUpdate .= "UPDATE `requests` SET `status`='accepted'  WHERE `id` = '$id';";
     $result = mysqli_query($dbConn, $queryUpdate);
     if (mysqli_query($dbConn,$queryUpdate)) {
         echo "<div> Account has been accepted </div>";
     } else {
        echo "ERROR: Could not able to execute $queryUpdate. " . $dbConn->error; //mysqli_error($dbConn)
     }
     
 }

?>

