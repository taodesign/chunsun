<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>管理 | 文章列表</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
require 'tpl/nav.php';
require 'tpl/topbar.php';
?>

<div class="editbar">点击条目可编辑</div>
    <div class="formwrap caselist">

<?php
$perCount=15; //item per page
if(isset($_GET['page'])){
    $p=(int)$_GET['page'];
}else{
    $p=1;
}
$startCount = ($p-1)*$perCount;

$queryCase = mysqli_query($con, "SELECT * FROM posts ORDER BY id DESC LIMIT $startCount, $perCount");

if (mysqli_num_rows($queryCase)){
    echo "<ul>";
    while($row=mysqli_fetch_array($queryCase)){
        //$imglist = explode(",","${row["imgsrc"]}");

        //query for label Chinese name
        $category = "${row["tag"]}";
        $queryCategory = mysqli_query($con, "select * from tags WHERE tag='$category'");
        $row2=mysqli_fetch_array($queryCategory);

        //query case id
        $postId = "${row["id"]}";

        echo "<li><span>${row["id"]}</span>.<a href='post.php?id=$postId'>${row2["tag_local"]} &rsaquo; ${row["ptitle"]}</a> <a href='#' data-cid='$postId' class='btn-del'>删除</a></li>";
    }
    echo "</ul>";
}else{
    echo '<p class="msg">没有案例录入。</p>';
}

include 'pager.php';

mysqli_free_result($queryCase);
mysqli_close($con);

?>

    </div>
<?php require 'tpl/footer.php'; ?>

<script src="../static/jquery-3.3.1.min.js"></script>
<script src="assets/main.js"></script>
</body>
</html>