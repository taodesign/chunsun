<?php
require_once '../config.php';

$cid = $_POST["cid"];
$userpw = md5($_POST["userpw"]);

$updateUserpw="UPDATE users set passwd='$userpw' where id='$cid'";

$result = mysqli_query ($con, $updateUserpw);

$jsArr = array('msg'=>'success','aaa'=>$userpw,'bbb'=>$cid);
echo json_encode($jsArr);

mysqli_close($con);
?>