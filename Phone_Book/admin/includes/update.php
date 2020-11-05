<?php require_once('../../db/config.php'); 

if(isset($_POST['updateUser']))
 {
  $id = $_POST['id'];    
  // $profilepic = $_POST['profileavatar'];
      $username = $_POST['updateUsername'];
      $email = $_POST['updateEmail'];
      $password = $_POST['updatePassword'];
      $phone= $_POST['updatePhone'];
      $city= $_POST['updateCity'];
      $country= $_POST['updateCountry'];
      $address= $_POST['updateAddress'];
      $sec_ques = $_POST['updateSec_question'];
      $sec_answ = $_POST['updateSec_answer'];

      //For Authentication of unique Username and Email:
    $query_username = "SELECT * FROM `registered_users` WHERE username ='.$username.'";
    $query_email = "SELECT * FROM `registered_users` WHERE email ='.$email.'";
    $res_u = mysqli_query($dbConn,  $query_username);
    $res_e = mysqli_query($dbConn, $query_email);
    
    if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
      $query = "UPDATE `registered_users` SET `username`=".$username.",`email`=".$email.",`password`=".$password.",`phone`=".$phone.",`city`= ".$city.",`country`=".$country.",`address`=".$address.",`sec_question`=".$sec_ques.",`sec_answer`=".$sec_answ.", WHERE `id` =".$id."; ";
// (`id`, `profile_pic`, `username`, `email`, `password`,`phone`,`city`,`country`,`address`,`sec_ques`,`sec_ans`,`date`) VALUES (NULL, '$profilepic', '$username', '$email', '$password', ' $phone', '$city', '$country', '$address','$sec_ques','$sec_answ', CURRENT_TIMESTAMP)";
           $result = mysqli_query($dbConn, $query);
           if(mysqli_query($dbConn,$query)){
            echo "<script>alert('Data Updated successfully.')</script>";
            header("location:./index.php");
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
        }
        exit();
    }
  }
?>
