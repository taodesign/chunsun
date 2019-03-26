<?php
require_once '../config.php';

$updateCase="UPDATE posts SET tag='".$_POST["tag"]."',ptitle='".$_POST["ptitle"]."',article = '".$_POST["article"]."',updateTime = NOW() WHERE id='".$_POST["id"]."'";

mysqli_query($con, $updateCase);

$jsArr = array('msg'=>'success','type'=> 'edit');
echo json_encode($jsArr);

mysqli_close($con);

