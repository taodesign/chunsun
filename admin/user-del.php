<?php
require_once '../config.php';

$cid = $_POST["cid"];

if($cid != '1'){
    $query="delete from users where id=$cid";
    $result = mysqli_query ($con, $query);

    $jsArr = array('msg'=>'success');
    echo json_encode($jsArr);
}else{
    $jsArr = array('msg'=>'false');
    echo json_encode($jsArr);
}
mysqli_close($con);
?>