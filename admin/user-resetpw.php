<?php
require_once '../config.php';

$cid = $_POST["cid"];
$userpw = md5($_POST["userpw"]);

$updateUserpw="UPDATE users set passwd='$userpw' where id='$cid'";

$result = mysql_query ($updateUserpw,$con);

$jsArr = array('msg'=>'success','aaa'=>$userpw,'bbb'=>$cid);
echo json_encode($jsArr);

mysql_close($con);
?>