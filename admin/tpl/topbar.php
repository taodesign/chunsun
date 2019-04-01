<?php
    session_start();
    $lifeTime = 8*3600+3600; //设置登录一个小时过期
    setcookie(session_name(), session_id(), time() + $lifeTime, "/");
?>
<main>
    <div class="topbar">
        你好
        <?php if (isset($_SESSION['uid'])) {echo $_SESSION['user'];}else{header("Location: ./index.php");} ?>， <a href="logout.inc.php">退出</a> | <a href="../index.php" target="_blank" title="">网站首页</a>
    </div>