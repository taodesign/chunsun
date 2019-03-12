<?php
require_once '../config.php';

//edit
$updateId = $_POST["updateId"];
if($updateId){
    $updateCategory="UPDATE category set label='".$_POST["label"]."',category='".$_POST["category"]."' where id=$updateId";

    mysqli_query($con, $updateCategory);

    $jsArr = array('msg'=>'success','type'=> 'edit');
    echo json_encode($jsArr);
    mysqli_close($con);
}

//delete
$cid = $_POST["cid"];
if($cid){
    $query="delete from category where id=$cid";
    $result = mysqli_query ($con, $query);

    $jsArr = array('msg'=>'success');
    echo json_encode($jsArr);
    mysqli_close($con);
}
