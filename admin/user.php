<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>添加项目 - 后台 - thepaper cases</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
require 'tpl/nav.php';
require 'tpl/topbar.php';
?>

<div class="editbar">用户</div>
<div class="formwrap">
    <p class="comming">权限、修改密码</p>
<?php

$queryUser = mysql_query("select * from users");

echo "<ol class='userlist'>";
while($row=mysql_fetch_array($queryUser)){
    echo "<li>${row["name"]}</li>";
}
echo "</ol>";

mysql_close($con);

?>

</div>
<?php require 'tpl/footer.php'; ?>
<script src="../static/jquery.js"></script>
<script src="assets/main.js"></script>
</body>
</html>