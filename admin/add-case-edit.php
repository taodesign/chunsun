<?php
require_once '../config.php';

$updateCase="UPDATE cases set label='".$_POST["label"]."',pname='".$_POST["pname"]."',purl = '".$_POST["purl"]."',pinfo = '".$_POST["pinfo"]."',pv = '".$_POST["pv"]."',cover = '".$_POST["cover"]."',pdesc = '".$_POST["pdesc"]."' where id='".$_POST["id"]."'";

mysql_query($updateCase);

$jsArr = array('msg'=>'success','type'=> 'edit');
echo json_encode($jsArr);

mysql_close($con);

