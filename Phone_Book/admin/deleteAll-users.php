<?php
require('../db/config.php');
// session_start();
$query = " DELETE FROM `registered_users`;";

$results = mysqli_query($dbConn, $query);
if(mysqli_query($dbConn,$query)){
 echo "<script>alert('All Users has been deleted successfully.')</script>";
 header('location:index.php');
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