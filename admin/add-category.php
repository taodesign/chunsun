<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>添加项目 - 后台 - thepaper cases</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php require 'tpl/nav.php'; ?>

<main>
    <?php require 'tpl/topbar.php'; ?>
    <div class="editbar">添加</div>
    <div class="editform">
        <input type="text" name="cName" id="cName" placeholder='请填写分类名称(必填)' />
        <input type="text" name="cNameE" id="cNameE" placeholder='分类英文名称(必填)' />
        <button id='btnAddcat'>添加</button>
    </div>
    <div class="editbar">修改/删除</div>
    <div class="editform">
        <ul>
<?php
    mysql_select_db('anybodypost',$con);
    $query = mysql_query("select * from category");

    while($row=mysql_fetch_array($query)){
        echo "<li><input type='text' name='cname' id='cName${row["id"]}' value='${row["category"]}' /> <input type='text' name='cename' id='cNameE${row["id"]}' value='${row["label"]}' /> <button data-cid='${row["id"]}' class='btn-editcat'>修改</button> <button data-cid='${row["id"]}' class='btn-delcat'>删除</button></li>";
    }
?>
        </ul>
    </div>
</main>
<?php require 'tpl/footer.php'; ?>

<script src="../static/jquery.js"></script>
<script src="assets/main.js"></script>
</body>
</html>