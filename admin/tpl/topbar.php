<?php
    session_start();
?>
<main>
    <div class="topbar">
        你好
        <?php if (isset($_SESSION['uid'])) {echo  $_SESSION['user'];}else{header("Location: ./index.php");} ?>， <a href="logout.inc.php">退出</a> | <a href="../index.php" target="_blank" title="">网站首页</a>
    </div>