<?php
    include 'header-case.php';
?>

<div class="login">
    <div class="loginform" id="loginform">
    <?php
        if(isset($_GET['errmsg'])){
            $errtype = $_GET['errmsg'];
            if($errtype == 'err1'){
                echo '<p class="errmsg">你的用户名和密码与我们的记录不匹配。请重新检查并重试。</p>';
            }
        }
    ?>
    <form action="login-action.php" method="post" >
        <div>
            <label for="name">用户名</label>
            <input type="text" name="aName" value="<?php
                if(isset($_GET['thename'])){
                    echo $_GET['thename'];
                }?>" placeholder="请输入用户名">


        </div>
        <div>
            <label for="passwd">密码</label>
            <input type="password" name="aPw" value="" placeholder="请输入密码">
        </div>
        <div class="btnbar">
            <button id="login">登录</button>
        </div>
        <div class="other">
            <a href="register.php">注册</a>
            <!-- | <a href="#" class="fogot">忘记密码</a> -->
        </div>
    </form>
    </div>
</div>

<?php
    include 'footer.php';
?>