<?php
require_once '../config.php';

$name = $_POST["name"];
$postpw = $_POST["passwd"];

$queryUser = mysql_query("select * from users where name='$name' and passwd='$postpw'");
if (mysql_num_rows($queryUser)){
    $jsArr = array('msg'=>'success','type'=> 'login');
    echo json_encode($jsArr);
}else{
    $jsArr = array('msg'=>'false','type'=> 'login');
    echo json_encode($jsArr);
}

mysql_close($con);