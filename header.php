<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>all post</title>
    <link rel="stylesheet" href="static/style.css">
    <!-- <link rel="alternate" type="application/rss+xml" title="Feed" href="http://localhost/thepaper-case/rss.php" /> -->
</head>
<body>
<header>
    <h1><a href="index.php">all post</a></h1>
    <div class="topbar">
        <?php
            echo '你好，'.$_COOKIE["name"].'， <a href="#" id="logout">退出</a> | <a href="memcp.php" target="_self" title="">个人中心</a>'
        ?>
    </div>
</header>

<?php require 'config.php'; ?>

<nav>
    <ul id="nav">
        <?php
            //mysql_select_db('anybodypost',$con);
            $query = mysql_query("select * from category");

            //index or category
            if(isset($_GET['cat'])) {
                $category = $_GET["cat"];
                while($row=mysql_fetch_array($query)){
                    //nav active state
                    if($category == "${row["label"]}"){
                        echo "<li><a href='index.php?cat=${row["label"]}' data-tag='${row["label"]}' class='active'>${row["category"]}</a></li>";
                    }else {
                        echo "<li><a href='index.php?cat=${row["label"]}' data-tag='${row["label"]}'>${row["category"]}</a></li>";
                    }
                }
            }else{
                while($row=mysql_fetch_array($query)){
                    echo "<li><a href='index.php?cat=${row["label"]}' data-tag='${row["label"]}'>${row["category"]}</a></li>";
                }
            }

            mysql_close($con);
        ?>
    </ul>
</nav>
