<?php
require_once '../config.php';

$cid = $_POST["cid"];

if($cid != '1'){
    $query="delete from users where id=$cid";
    $result = mysql_query ($query,$con);

    $jsArr = array('msg'=>'success');
    echo json_encode($jsArr);
}else{
    $jsArr = array('msg'=>'false');
    echo json_encode($jsArr);
}
mysql_close($con);
?>