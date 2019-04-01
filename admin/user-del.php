<?php
require_once '../config.php';

$uid = $_POST["deltId"];

$query="DELETE FROM users WHERE id=$uid";
$result = mysqli_query ($con, $query);
$jsArr = array('msg'=>'success');
echo json_encode($jsArr);

mysqli_close($con);
?>