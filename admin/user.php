<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>管理 | 用户</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
    include 'tpl/nav.php';
    include 'tpl/topbar.php';
?>

<div class="editbar">更改密码</div>
<div class="formwrap">

    <div class="row">
        <label>密码</label>
        <input type="password" minlength="6" name="newpasswd1" value="" placeholder="请输入新密码">
    </div>
    <div class="row">
        <label>确认密码</label>
        <input type="password" minlength="6" name="newpasswd2" value="" placeholder="请再次输入新密码">
    </div>
    <div class="btnbar">
        <button type="button" id="updatePassword">更改密码</button>
    </div>
</div>
<?php
if($_SESSION['uid'] == "1"){
    echo '<div class="editbar">管理用户</div><div class="userlist"><ul><li class="thead"><span>用户名</span><span>创建时间</span><span>上次登录</span><span class="textright">操作</span></li>';

    $query = mysqli_query($con, "SELECT * FROM users");
    while($row=mysqli_fetch_array($query)){
        if ($row["id"]!=="1") {
            echo "<li><span>${row["username"]}</span><span>${row["regtime"]}</span><span>${row["logtime"]}</span><span><button data-tid='${row["id"]}' class='btn-err btn-deluser'>删除</button></span></li>";
        }
    }

    echo '</ul></div><div class="editbar">创建用户</div><div class="formwrap"><form action="user-create.inc.php" method="post" ><div class="row"><label>用户名</label><input type="text" name="username" placeholder="请输入用户名"></div><div class="row"><label>电子邮箱</label><input type="email" name="userEmail" placeholder="请输入email地址"></div><div class="row"><label>密码</label><input type="text" minlength="6" name="userpw" value="" placeholder="请输入密码"></div><div class="btnbar"><button type="submit" id="createUser">创建新用户</button></div></form></div>';
}
?>
<?php include 'tpl/footer.php'; ?>

<script src="../static/jquery-3.3.1.min.js"></script>
<script src="assets/main.js"></script>
</body>
</html>