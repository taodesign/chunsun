<?php
require_once '../config.php';

$label = $_POST["label"];
$category = $_POST["category"];

$sql="INSERT INTO category (label,category) VALUES ('$label','$category')";

$result = mysqli_query($con, $sql);

$jsArr = array('msg'=>'success','type'=> 'add');
echo json_encode($jsArr);

mysqli_close($con);