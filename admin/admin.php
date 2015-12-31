<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>登录 - 后台 | chunsun</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="login">
    <h1>chunsun login</h1>
    <div class="loginform" id="loginform">
        <div>
            <label for="name">用户名</label>
            <input type="text" name="aName" value="" placeholder="请输入用户名">
        </div>
        <div>
            <label for="passwd">密码</label>
            <input type="password" name="aPw" value="" placeholder="请输入密码">
        </div>
        <div class="btnbar">
            <button id="login">登录</button>
        </div>
        <div class="other">
            <a href="#" class="reg">注册</a>
            <!-- | <a href="#" class="fogot">忘记密码</a> -->
        </div>
    </div>
</div>

<div class="register" style="display: none;">
    <h1>chunsun register</h1>
    <div class="loginform" id="regform">
        <div>
            <label for="regName">用户名</label>
            <input type="text" name="regName" value="" placeholder="请输入用户名">
        </div>
        <div>
            <label for="regMail">邮箱</label>
            <input type="text" name="regMail" value="" placeholder="请填写邮箱地址">
        </div>
        <div>
            <label for="regPw">密码 ( <a href="#" id="showRegPw">显示</a> )</label>
            <input type="password" id="regPw" name="regPw" value="" placeholder="请输入密码">
        </div>
        <div>
            <label for="regVcode">验证码</label>
            <img id="checkpic" src='vcodecreate.php' />
            <input type="text" id="regVcode" name="regVcode" value="" placeholder="请输入验证码">
        </div>
        <div class="btnbar">
            <button id="regSubmit">注册</button>
        </div>
        <div class="other">
            <a href="#" class="cancelreg">取消</a>
        </div>
    </div>
</div>

<script src="../static/jquery.js"></script>
<script src="assets/main.js"></script>
</body>
</html>