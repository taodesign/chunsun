<?php
    include 'header-case.php';
?>

<div class="register">
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
            <a href="login.php">登录</a>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>