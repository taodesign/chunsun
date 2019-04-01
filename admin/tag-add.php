<?php
require_once '../config.php';


$tag = $_POST["tag"];
$tagLocal = $_POST["tag_local"];
$count = '0';

$result = mysqli_query($con, "INSERT INTO tags (tag, tag_local, tagcounter)
VALUES ('$tag', '$tagLocal', '$count')");

if($result){
    $jsArr = array('msg'=>'success', 'type'=>'add');
    echo json_encode($jsArr);
    include "./tag-count.php";
}else{
    $jsArr = array('msg'=>'false', 'type'=>'add');
    echo json_encode($jsArr);
}
mysqli_close($con);