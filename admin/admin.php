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
    <?php
        if(isset($_GET['errmsg'])){
            $errtype = $_GET['errmsg'];
            if($errtype == 'err1'){
                echo '<p class="errmsg">你的用户名和密码与我们的记录不匹配。请重新检查并重试。</p>';
            }
        }
    ?>
    <form action="login.php" method="post" >
        <div>
            <label for="name">用户名</label>
            <input type="text" name="aName" value="<?php
                if(isset($_GET['username'])){
                    echo $_GET['username'];
                }?>" placeholder="请输入用户名">
        </div>
        <div>
            <label for="passwd">密码</label>
            <input type="password" name="aPw" value="" placeholder="请输入密码">
        </div>
        <div class="btnbar">
            <button id="login">登录</button>
        </div>
    </form>
    </div>
</div>

<script src="../static/jquery-3.3.1.min.js"></script>
<script src="assets/main.js"></script>
</body>
</html>