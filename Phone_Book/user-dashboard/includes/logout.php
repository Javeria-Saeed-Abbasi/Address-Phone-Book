<?php
session_start();
// unset($_SESSION["id"]);
// unset($_SESSION["name"]);
// header("Location:.../login/login.php");
// echo " Helo World" ;

if(isset($_GET['logout'])){
    session_destroy();
    header('location:../../login/login.php');
}


?>