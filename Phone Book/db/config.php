<?php 
$dbHost = 'localhost';
$dbUser = 'root';
$dbPswd = '';
$dbName = 'phone-book';
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPswd, $dbName);

if ($dbConn-> connect_error)
{
    die ("Connection failed: " . $dbConn->connect_error);
}
echo "Connection Successful" ;


?>