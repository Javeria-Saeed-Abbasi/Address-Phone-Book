<?php
require('../db/config.php');
session_start();
$userid = $_SESSION['id'];
var_dump ($userid);
$query = " DELETE FROM `users_contact` WHERE `user-id` = '$userid' ;";

$results = mysqli_query($dbConn, $query);
if(mysqli_query($dbConn,$query)){
 echo "<script>alert('All Contacts deleted successfully.')</script>";
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