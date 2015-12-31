<?php
require_once '../config.php';

$label = $_POST["label"];
$pname = $_POST["pname"];
$purl = $_POST["purl"];
$pinfo = $_POST["pinfo"];
$pv = $_POST["pv"];
$cover = $_POST["cover"];
$pdesc = $_POST["pdesc"];

$sql="INSERT INTO cases (label,pname,purl,pinfo,pv,cover,pdesc) VALUES ('$label','$pname','$purl','$pinfo','$pv','$cover','$pdesc')";

$result = mysql_query($sql,$con);

$jsArr = array('msg'=>'success','type'=> 'add');
echo json_encode($jsArr);

mysql_close($con);