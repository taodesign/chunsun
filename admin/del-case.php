<?php
require_once '../config.php';

$cid = $_POST["cid"];

if($cid){
    $query="delete from cases where id=$cid";
    $result = mysqli_query ($con, $query);
    mysqli_close($con);

    $jsArr = array('msg'=>'success');
    echo json_encode($jsArr);
}

?>