<?php
require_once '../config.php';

$label = $_POST["label"];
$category = $_POST["category"];

$sql="INSERT INTO category (label,category) VALUES ('$label','$category')";

$result = mysql_query($sql,$con);

$jsArr = array('msg'=>'success','type'=> 'add');
echo json_encode($jsArr);

mysql_close($con);