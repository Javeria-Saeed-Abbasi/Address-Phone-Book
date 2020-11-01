<?php
require('../db/config.php');
$id = $_GET['id'];
$query = "UPDATE `requests` SET `status`='rejected'  WHERE `id` = '$id';";
    // $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
    $result = mysqli_query($dbConn, $query);
    if (mysqli_query($dbConn,$query)) {
        echo "<div> Account has been rejected </div>";
        header("location:rejectedRequest.php");
    } else {
       echo "ERROR: Could not able to execute $query. " . $dbConn->error; //mysqli_error($dbConn)
    }
    

?>