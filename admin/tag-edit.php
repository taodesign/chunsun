<?php
require_once '../config.php';

$tag = $_POST["tag"];
$tagLocal = $_POST["tag_local"];
$updateId = $_POST["updateId"];
$deltId = $_POST["deltId"];

//edit
if($updateId){
    $updateTag="UPDATE tags SET tag_local='$tagLocal',tag='$tag' WHERE id='$updateId'";
    mysqli_query($con, $updateTag);
    $jsArr = array('msg'=>'success','type'=> 'edit');
    echo json_encode($jsArr);
}

//delete
if($deltId){
    $query="DELETE FROM tags WHERE id=$deltId";
    $result = mysqli_query ($con, $query);

    $jsArr = array('msg'=>'success','type'=> 'delt');
    echo json_encode($jsArr);
}

mysqli_close($con);