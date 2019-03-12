<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>添加项目 - 后台 - thepaper cases</title>
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

$queryCase = mysqli_query($con, "select * from cases order by id limit $startCount,$perCount");

if (mysqli_num_rows($queryCase)){
    echo "<ul>";
    while($row=mysqli_fetch_array($queryCase)){
        //$imglist = explode(",","${row["imgsrc"]}");

        //query for label Chinese name
        $category = "${row["label"]}";
        $queryCategory = mysqli_query($con, "select * from category WHERE label='$category'");
        $row2=mysqli_fetch_array($queryCategory);

        //query case id
        $caseId = "${row["id"]}";

        echo "<li><span>${row["id"]}</span>.<a href='add-case.php?case=$caseId'>${row2["label"]} &rsaquo; ${row["pname"]}</a> <a href='#' data-cid='$caseId' class='btn-del'>删除</a></li>";
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