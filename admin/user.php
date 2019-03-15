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

<div class="editbar">用户列表</div>
<div class="userlist">
    <p>用户列表：可删除、编辑</p>
</div>
<div class="editbar">创建用户</div>
<div class="formwrap">
<form action="user-create.inc.php" method="post" >
    <div>
        <label for="name">用户名</label>
        <input type="text" name="username" placeholder="请输入用户名">
    </div>
    <div>
        <label for="name">电子邮箱</label>
        <input type="email" name="userEmail" placeholder="请输入email地址">
    </div>
    <div>
        <label for="name">角色</label>
        <input type="text" name="userRole" value="editor" placeholder="编辑" readonly>
    </div>
    <div>
        <label for="passwd">密码</label>
        <input type="text" name="userpw" value="" placeholder="请输入密码">
    </div>
    <div class="btnbar">
        <button type="submit" id="login">提交</button>
    </div>
</form>

</div>
<?php include 'tpl/footer.php'; ?>
</body>
</html>