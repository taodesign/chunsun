<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>all post</title>
    <link rel="stylesheet" href="static/style.css">
    <!-- <link rel="alternate" type="application/rss+xml" title="Feed" href="http://localhost/taoshu/rss.php" /> -->
</head>
<body>
<header>
    <h1><a href="index.php">all post</a></h1>
</header>

<?php require 'config.php'; ?>

<nav>
    <ul id="nav">
        <?php
            //mysql_select_db('anybodypost',$con);
            $queryTags = mysqli_query($con, "select * from tags");

            //index or category
            if(isset($_GET['tag'])) {
                $selectTag = $_GET["tag"];
                while($row=mysqli_fetch_array($queryTags)){
                    //nav active state
                    if($selectTag == "${row["tag"]}"){
                        echo "<li><a href='index.php?tag=${row["tag"]}' data-tag='${row["tag"]}' class='active'>${row["tag_local"]}</a></li>";
                    }else {
                        echo "<li><a href='index.php?tag=${row["tag"]}' data-tag='${row["tag"]}'>${row["tag_local"]}</a></li>";
                    }
                }
            }else{
                while($row=mysqli_fetch_array($queryTags)){
                    echo "<li><a href='index.php?tag=${row["tag"]}' data-tag='${row["tag"]}'>${row["tag_local"]}</a></li>";
                }

            }
        ?>
    </ul>
</nav>
