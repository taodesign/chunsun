<?php
$con = mysqli_connect("localhost","root","111111") or die(mysqli_error());
mysqli_select_db($con, 'taoshu');
mysqli_query($con, "SET NAMES utf8");
?>