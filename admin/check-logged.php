<?php
@$passed=$_COOKIE["passed"];
if($passed=="true"){
    header("location:caselist.php");
    exit();
}
?>