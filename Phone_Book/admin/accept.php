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
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $phone= $row['phone'];
        $city= $row['city'];
        $country= $row['country'];
        $address= $row['address'];
        $sec_ques = $row['sec_question'];
        $sec_answ = $row['sec_answer'];  
        $status = $row['status'];
        $query2 = "INSERT INTO `registered_users` ( `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_ques`,`sec_ans`,`date`) VALUES ('$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
        
        $result2 = mysqli_query($dbConn, $query2);
        if ($result2) {
            $queryUpdate = "UPDATE `requests` SET `status`='accepted'  WHERE `id` = '$id';";
            $result3 = mysqli_query($dbConn, $queryUpdate);
            if ($result3) {
                echo "<div> Account has been accepted </div>";
                
            }
        } else {
            var_dump($result2);
           //echo "ERROR: Could not able to execute $queryUpdate. " . $dbConn->error; //mysqli_error($dbConn)
        }
    }
    
     
 }

?>

