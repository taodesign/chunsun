<?php
require_once 'config.php';

//post data
$regName = $_POST['regName'];
$regMail = $_POST['regMail'];
$regPw = md5($_POST['regPw']);
$slat = rand(100000,999999);

$sql="INSERT INTO `users` (`name`,`email`,`passwd`,`lastlogtime`,`usergroup`,`slat`) VALUES ('$regName','$regMail','$regPw',now(),'reader',$slat)";

$result = mysqli_query($con, $sql);

if($result){
    $jsArr = array('msg'=>'success', 'type'=>'reg', 'thename'=>$regName);
    echo json_encode($jsArr);
}else{
    echo mysqli_error();
}

mysqli_close($con);
?>