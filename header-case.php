<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>all post</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
<header>
    <h1><a href="index.php">all post</a></h1>
    <div class="topbar">
        <?php
            echo '你好，'.$_COOKIE["name"].'， <a href="#" id="logout">退出</a> | <a href="index.php" target="_self" title="">网站首页</a>'
        ?>
    </div>
</header>

