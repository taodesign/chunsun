<?php
require_once '../config.php';

//post data
$regName = $_POST['regName'];
$regMail = $_POST['regMail'];
$regPw = $_POST['regPw'];
$codeval = md5($_POST['codeinput']);

//SESSION
session_start();
$sCodeval = $_SESSION['verification'];

if($codeval == $sCodeval){
    $jsArr = array('vcode'=>'match');
    echo json_encode($jsArr);
}else{
    $jsArr = array('vcode'=>'error');
    echo json_encode($jsArr);
}
?>