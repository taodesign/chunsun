<?php
require_once 'config.php';

//post data
$codeval = md5($_POST['codeinput']);

//SESSION
session_start();
$sCodeval = $_SESSION['verification'];
if($codeval == $sCodeval){
    $jsArr = array('vcode'=>'match', 'msg'=>'success', 'type'=>'reg');
    echo json_encode($jsArr);
}else{
    $jsArr = array('vcode'=>'error', 'type'=> 'reg');
    echo json_encode($jsArr);
}
?>