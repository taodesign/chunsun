<?php
require_once '../config.php';

$cid = $_POST["cid"];

if($cid){
    $query="delete from cases where id=$cid";
    $result = mysql_query ($query,$con);
    mysql_close($con);

    $jsArr = array('msg'=>'success');
    echo json_encode($jsArr);
}

?>