<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>添加项目 - 后台 - thepaper cases</title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
require 'tpl/nav.php';
require 'tpl/topbar.php';

if(!empty($_GET["case"])){
    $query ="select * from cases where id =".$_GET['case']." limit 0,1 ";
    $resource=mysql_query($query);
    $row=mysql_fetch_array($resource);
    echo '<input type="hidden" id="caseId" name="caseId" value="'.$_GET["case"].'">';
}else{
    $row = array(
        'pname' => '',
        'label' => '',
        'purl' => '',
        'pinfo' => '',
        'pv' => '',
        'pdesc' => '',
        'cover' => ''
    );
}

?>
<div class="editbar"></div>
    <div class="formwrap addcase" id="addcase">
        <div class="row">
            <label for="">项目名称</label>
            <input type="text" name="pName" id="pName" value="<?php echo $row['pname']; ?>" placeholder="项目名称">
        </div>
        <div class="row">
            <label for="">项目分类</label>
            <select name="pCat" id="pCat">
                <?php
                    $caseLabel = $row['label'];
                    $queryCat = mysql_query("select * from category");
                    while($rowCat=mysql_fetch_array($queryCat)) {
                        $catLabel = $rowCat["label"];
                        if ($catLabel == $caseLabel) {
                            echo "<option selected='selected' value='${rowCat["label"]}'>${rowCat["category"]}</option>";
                        }else{
                            echo "<option value='${rowCat["label"]}'>${rowCat["category"]}</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="row">
            <label for="">在线URL</label>
            <input type="text" name="" id="pUrl" value="<?php echo $row['purl']; ?>" placeholder="在线URL">
        </div>
        <div class="row">
            <label for="">简述特色</label>
            <input type="text" name="" id="pInfo" value="<?php echo $row['pinfo']; ?>" placeholder="简述、特色">
        </div>
        <div class="row">
            <label for="">总访问量</label>
            <input type="text" name="" id="pPv" value="<?php echo $row['pv']; ?>" placeholder="总访问量">
        </div>
        <div class="row">
            <label for="">描述</label>
            <div class="editorwrap">
                <textarea name="content" style="width:700px;height:200px;visibility:hidden;" id="pDesc"><?php echo $row['pdesc']; ?></textarea>
            </div>
        </div>
        <div class="row files">
            <label for="">选择封面</label>
            <div class="imgrow">
                <input type="text" id="pCover" value="<?php echo $row['cover']; ?>" disabled="disabled" /> <input type="button" id="filemanager" value="选择图片" />
            </div>
        </div>
        <div class="btnbar">
        <?php
            if(!empty($_GET["case"])){
                echo '<button id="btnEdit">修改</button>';
            }else{
                echo '<button id="btnAddCase">提交</button>';
            }
        ?>
        </div>
    </div>
<?php require 'tpl/footer.php'; ?>

<script src="../static/jquery.js"></script>
<script src="assets/main.js"></script>
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script>
    //editor init
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="content"]', {
            resizeType : 1,
            allowPreviewEmoticons : false,
            allowImageUpload : true,
            uploadJson : 'kindeditor/php/upload_json.php',
            fileManagerJson : 'kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            items : [
                'fontsize', '|', 'forecolor', 'bold', 'italic', 'underline',
                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', 'hr', '|', 'emoticons', 'image', 'link', 'unlink', '|', 'source']
        });

        K('#filemanager').click(function() {
            editor.loadPlugin('filemanager', function() {
                editor.plugin.filemanagerDialog({
                    viewType : 'VIEW',
                    dirName : 'image',
                    clickFn : function(url, title) {
                        K('#pCover').val(url);
                        editor.hideDialog();
                    }
                });
            });
        });
    });

    //submit
    $('#btnAddCase').on('click',function (e) {
        e.preventDefault();
        var pName = $('#pName').val(),
            pCat = $('#pCat').val(),
            pUrl = $('#pUrl').val(),
            pInfo = $('#pInfo').val(),
            pPv = $('#pPv').val(),
            pCover = $('#pCover').val();

        var pDesc = editor.html();

        if(pName){
            $.post("add-case-post.php",{
                pname:pName,
                label:pCat,
                purl:pUrl,
                pinfo:pInfo,
                pv:pPv,
                pdesc:pDesc,
                cover:pCover
            }, function(data){
                data = JSON.parse(data);//将字符串转换为json对象
                if (data.msg=='success') {
                    alert('添加成功！');
                    //location.href = 'add-case.php';
                };
            });
        }else{
            alert('项目名称必填，谢谢！');
        }
    })

    //edit
    var caseId = $('#caseId').val();
    $('#btnEdit').on('click',function (e) {
        e.preventDefault();
        var pName = $('#pName').val(),
            pCat = $('#pCat').val(),
            pUrl = $('#pUrl').val(),
            pInfo = $('#pInfo').val(),
            pPv = $('#pPv').val(),
            pCover = $('#pCover').val();

        var pDesc = editor.html();

        if(pName){
            $.post("add-case-edit.php",{
                id:caseId,
                pname:pName,
                label:pCat,
                purl:pUrl,
                pinfo:pInfo,
                pv:pPv,
                pdesc:pDesc,
                cover:pCover
            }, function(data){
                data = JSON.parse(data);//将字符串转换为json对象
                if (data.msg == 'success') {
                    alert('修改成功！');
                };
            });
        }else{
            alert('项目名称必填，谢谢！');
        }
    })

</script>

</body>
</html>