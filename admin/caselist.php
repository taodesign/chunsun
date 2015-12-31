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

$queryCase = mysql_query("select * from cases order by id limit $startCount,$perCount");

if (mysql_num_rows($queryCase)){
    echo "<ul>";
    while($row=mysql_fetch_array($queryCase)){
        //$imglist = explode(",","${row["imgsrc"]}");

        //query for label Chinese name
        $category = "${row["label"]}";
        $queryCategory = mysql_query("select * from category WHERE label='$category'");
        $row2=mysql_fetch_array($queryCategory);

        //query case id
        $caseId = "${row["id"]}";

        echo "<li><a href='add-case.php?case=$caseId'>${row["pname"]} <span>/${row2["category"]}</span></a> <a href='#' data-cid='$caseId' class='btn-del'>删除</a></li>";
    }
    echo "</ul>";
}else{
    echo '<p class="msg">没有案例录入。</p>';
}

include 'pager.php';

mysql_free_result($queryCase);
mysql_close($con);

?>

    </div>
<?php require 'tpl/footer.php'; ?>

<script src="../static/jquery.js"></script>
<script src="assets/main.js"></script>
</body>
</html>