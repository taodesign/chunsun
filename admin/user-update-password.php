<?php
require_once '../config.php';
session_start();

$theId= $_SESSION["uid"];
$pw1= $_POST["newpasswd1"];
$pw2= $_POST["newpasswd2"];
$hashedPw = password_hash($pw2, PASSWORD_DEFAULT);

$sql = "UPDATE users SET passwd='$hashedPw' WHERE id='$theId'";
mysqli_query($con, $sql);

$jsArr = array('msg'=>'success', 'action'=> 'updatepw');
echo json_encode($jsArr);

mysqli_close($con);