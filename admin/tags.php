<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>管理 | 分类</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php require 'tpl/nav.php'; ?>

<main>
    <?php require 'tpl/topbar.php'; ?>
    <div class="editbar">添加</div>
    <div class="formwrap editform">
        <input type="text" name="tag_local" id="tagLocal" placeholder='请填写分类名称(必填)' />
        <input type="text" name="tag" id="tag" placeholder='分类英文名称(必填)' />
        <button id='btnAddTag'>添加</button>
    </div>
    <div class="editbar">修改/删除</div>
    <div class="formwrap editform">
    <ul>
        <li class="thead">
            <span class="g-count">计数</span>
            <span class="g-name">分类名</span>
            <span class="g-label">分类英文名</span>
            <span class="g-edit">修改</span>
            <span class="g-del">删除</span>
        </li>
<?php
    $query = mysqli_query($con, "SELECT * FROM tags");
    while($row=mysqli_fetch_array($query)){
        echo "<li><input type='text' class='c-count' disabled='disabled' name='cCount' value='${row["tagcounter"]}' /> <input type='text' name='theTagLocal' id='theTagLocal${row["id"]}' value='${row["tag_local"]}' /> <input type='text' name='thetag' id='theTag${row["id"]}' value='${row["tag"]}' /> <button data-tid='${row["id"]}' id='btnEditTag'>修改</button> <button data-tid='${row["id"]}' class='btnDelCat'>删除</button></li>";
    }
?>
        </ul>
    </div>
</main>
<?php require 'tpl/footer.php'; ?>

<script src="../static/jquery-3.3.1.min.js"></script>
<script src="./assets/main.js"></script>
</body>
</html>