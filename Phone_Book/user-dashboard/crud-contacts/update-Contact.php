<?php
require_once('../../db/config.php');

if(isset($_POST['updateContact'])){
   $id = $_GET['id'];
//    $contact_id = $_POST['contact_id'];
   $fname = $_POST['updateFirstname'];
   $lastname = $_POST['updateLastname'];
   $email = $_POST['updateEmail'];
   $phone = $_POST['updateUserphone'];
   $address =  $_POST['updateAddress'];
   $city =  $_POST['updateCity'];
   $country =  $_POST['updateCountry'];
   
   
$query = "UPDATE `users_contact` SET `first-name`='".$fname."',`last-name`='".$lastname."',`email`='".$email."',`phone`='".$phone."',`address`='".$address."',`city`='".$city."',`country`='".$country."' WHERE `id` ='".$id."' ";
$result = mysqli_query($dbConn, $query);
if($result){
	
	echo '<script> alert("Data Updated Successfully."); </script>';
	header("Location:../index.php");
}else  {
 	 echo '<script> alert("Data Not Updated"); </script>';  

}	
exit();
}

// $profileid = $_GET['editProfile']; // GETTING ID FROM URL
// $query = "SELECT * FROM userdetails WHERE contact_id ='$profileid' ";
// $result = @mysqli_query($query);
//  $row = @mysqli_fetch_assoc($result);
 
?>
