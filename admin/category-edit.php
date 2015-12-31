<?php
require_once '../config.php';

//edit
$updateId = $_POST["updateId"];
if($updateId){
    $updateCategory="UPDATE category set label='".$_POST["label"]."',category='".$_POST["category"]."' where id=$updateId";

    mysql_query($updateCategory);

    $jsArr = array('msg'=>'success','type'=> 'edit');
    echo json_encode($jsArr);
    mysql_close($con);
}

//delete
$cid = $_POST["cid"];
if($cid){
    $query="delete from category where id=$cid";
    $result = mysql_query ($query,$con);

    $jsArr = array('msg'=>'success');
    echo json_encode($jsArr);
    mysql_close($con);
}
