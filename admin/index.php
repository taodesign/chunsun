<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>系统管理 - 登录 | Peachtree CMS</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="login">
    <h1>登录</h1>
    <div class="formwrap loginform" id="loginform">

    <form action="login.inc.php" method="post" >
        <div>
            <label for="name">用户名</label>
            <input type="text" name="aName" placeholder="请输入用户名">
        </div>
        <div>
            <label for="passwd">密码</label>
            <input type="password" name="aPw" value="" placeholder="请输入密码">
        </div>
        <div class="btnbar">
            <button type="submit" id="login">登录</button>
        </div>
    </form>
    </div>
</div>

</body>
</html>