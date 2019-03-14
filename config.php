<?php
$server = "localhost";
$dbUser = "root";
$dbPass = "111111";
$dbName = "taoshu";

$con = mysqli_connect($server, $dbUser, $dbPass, $dbName);
if (!$con) {
    die("database connection failed:".mysqli_connect_error());
}
?>