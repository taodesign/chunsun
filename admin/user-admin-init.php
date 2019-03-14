<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>系统管理 - 创建用户 | Peachtree CMS</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="login">
    <h1>创建用户</h1>
    <div class="formwrap loginform">
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
            <input type="text" name="userRole" value="editor" placeholder="编辑">
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
</div>
</body>
</html>