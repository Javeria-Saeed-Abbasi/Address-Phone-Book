<?php
require('../db/config.php');
session_start();
$id  = $_SESSION["id"] ; 
// $id = $_GET['id'];
// sql to delete a record
$query = " DELETE FROM `requests` WHERE `requests`.`id` = '$id';";

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