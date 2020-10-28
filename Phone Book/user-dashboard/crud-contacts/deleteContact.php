<?php
require('../db/config.php');
// session_start();
// $id  = $_SESSION["id"] ; 
// $id = $_GET['id'];

$query = " DELETE FROM `users_contact` WHERE `users_contact`.`id` = '$id';";

$results = mysqli_query($dbConn, $query);
if(mysqli_query($dbConn,$query)){
 echo "<script>alert('Record deleted successfully.')</script>";
} else{
 echo "ERROR: Could not able to execute $query. " . mysqli_error($dbConn);
}
exit();

// if ($dbConn->query($query) === TRUE) {
//   echo " Record deleted successfully";
// } else {
//   echo " Error deleting record: " . $dbConn->error;
// }

?>