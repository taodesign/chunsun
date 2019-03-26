<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>管理 | 文章</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
require 'tpl/nav.php';
require 'tpl/topbar.php';

if(!empty($_GET["id"])){
    $query ="select * from posts where id =".$_GET['id']." limit 0,1 ";
    $resource=mysqli_query($con, $query);
    $row=mysqli_fetch_array($resource);
    echo '<input type="hidden" id="postId" name="postId" value="'.$_GET["id"].'">';
}else{
    $row = array(
        'ptitle' => '',
        'tag' => '',
        'article' => ''
    );
}

?>
<div class="editbar"></div>
    <div class="formwrap addcase" id="addcase">
        <div class="row">
            <label for="">文章标题</label>
            <input type="text" name="ptitle" id="ptitle" value="<?php echo $row['ptitle']; ?>" placeholder="文章标题">
        </div>
        <div class="row">
            <label for="">文章分类</label>
            <select name="pTag" id="pTag">
                <?php
                    $postTag = $row['tag'];
                    $queryTag = mysqli_query($con, "select * from tags");
                    while($rowTag=mysqli_fetch_array($queryTag)) {
                        $tag = $rowTag["tag"];
                        if ($tag == $postTag) {
                            echo "<option selected='selected' value='${rowTag["tag"]}'>${rowTag["tag_local"]}</option>";
                        }else{
                            echo "<option value='${rowTag["tag"]}'>${rowTag["tag_local"]}</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="row">
            <label for="">正文</label>
            <div class="editorwrap">
                <textarea name="content" id="theArticle"><?php echo $row['article']; ?></textarea>
            </div>
        </div>
        <div class="btnbar">
        <?php
            if(!empty($_GET["id"])){
                echo '<button id="btnEdit">修改</button>';
            }else{
                echo '<button id="btnAdd">提交</button>';
            }
        ?>
        </div>
    </div>
<?php require 'tpl/footer.php'; ?>

<script src="../static/jquery-3.3.1.min.js"></script>
<script src="assets/main.js"></script>
<script>
    //submit
    $('#btnAdd').on('click',function (e) {
        e.preventDefault();
        var ptitle = $('#ptitle').val(),
            pTag = $('#pTag').val()
            theArticle = $("#theArticle").val();

        if(ptitle){
            $.post("post-add.php",{
                ptitle:ptitle,
                tag:pTag,
                article:theArticle
            }, function(data){
                data = JSON.parse(data); //将字符串转换为json对象
                if (data.msg=='success') {
                    alert('添加成功！');
                    //location.href = 'add-case.php';
                };
            });
        }else{
            alert('文章名称必填，谢谢！');
        }
    })

    //edit
    var postId = $('#postId').val();
    $('#btnEdit').on('click',function (e) {
        e.preventDefault();
        var ptitle = $('#ptitle').val(),
            pTag = $('#pTag').val()
            theArticle = $("#theArticle").val();

        if(ptitle){
            $.post("post-edit.php",{
                id: postId,
                ptitle:ptitle,
                tag:pTag,
                article:theArticle
            }, function(data){
                data = JSON.parse(data);//将字符串转换为json对象
                if (data.msg == 'success') {
                    alert('修改成功！');
                };
            });
        }else{
            alert('文章名称必填，谢谢！');
        }
    })

</script>

</body>
</html>