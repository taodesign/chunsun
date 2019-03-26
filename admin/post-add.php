<?php
require_once '../config.php';

$tag = $_POST["tag"];
$ptitle = $_POST["ptitle"];
$article = $_POST["article"];

$sql="INSERT INTO posts (tag,ptitle,article,createTime,updateTime) VALUES ('$tag','$ptitle','$article',NOW(),NOW())";

$result = mysqli_query($con, $sql);
$jsArr = array('msg'=>'success','type'=> 'add');
echo json_encode($jsArr);
mysqli_close($con);