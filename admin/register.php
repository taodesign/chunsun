<?php
require_once '../config.php';

//post data
$regName = $_POST['regName'];
$regMail = $_POST['regMail'];
$regPw = md5($_POST['regPw']);

$sql="INSERT INTO `users` (`name`,`email`,`passwd`,`logtime`,`usergroup`) VALUES ('$regName','$regMail','$regPw',now(),'reader')";

$result = mysql_query($sql,$con);

if($result){
    $jsArr = array('msg'=>'success', 'type'=>'reg');
    echo json_encode($jsArr);
}else{
    echo mysql_error();
}

mysql_close($con);
?>