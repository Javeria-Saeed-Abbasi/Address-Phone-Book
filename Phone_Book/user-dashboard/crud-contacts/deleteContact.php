<?php
 require_once('../../db/config.php'); 


// $id  = $_SESSION["id"] ; 
$id = $_GET["id"];

$query = "DELETE FROM `users_contact` WHERE  `id` = ".$id.";";
// var_dump($id);
$result = mysqli_query($dbConn, $query);

if(mysqli_query($dbConn, $query)){
 echo "<script>alert('Your Contact deleted successfully.')</script>";
 header("location:../index.php");
} else{
 echo "ERROR: Could not able to execute $query. " . $dbConn->error;
}

// if ($dbConn->query($query) === TRUE) {
//   echo " Record deleted successfully";
// } else {
//   echo " Error deleting record: " . $dbConn->error;
// }

?>