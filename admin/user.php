<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>添加项目 - 后台 - thepaper cases</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
    include 'tpl/nav.php';
    include 'tpl/topbar.php';
?>

<div class="editbar">用户管理</div>
<div class="formwrap userlist">
<?php
$perCount=15; //item per page
if(isset($_GET['page'])){
    $p=(int)$_GET['page'];
}else{
    $p=1;
}
$startCount = ($p-1)*$perCount;

$queryUser = mysql_query("select * from users order by id limit $startCount,$perCount");

echo "<ul class='userlist'>";
while($row=mysql_fetch_array($queryUser)){
    echo "<li>${row["name"]} <span><input type='text' value='' /><a class='btn-resetpw' data-cid='${row["id"]}' href='#'>重置密码</a> | <a class='btn-userdel' data-cid='${row["id"]}' href='#'>删除</a></span></li>";
}
echo "</ul>";

include 'pager.php';

mysql_close($con);
?>

</div>
<?php include 'tpl/footer.php'; ?>
<script src="../static/jquery.js"></script>
<script src="assets/main.js"></script>
</body>
</html>