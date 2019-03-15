$(document).ready(function(){

    //case delete
    $('.btn-del').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var caseid = $this.data('cid');
        $.post("post-del.php",{cid:caseid}, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            //console.log(data);
            if (data.msg) {
                alert ('删除成功');
                window.location.href='postlist.php';
            };
        });
    })

    //user delete
    $('.btn-userdel').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var userid = $this.data('cid');
        $.post("user-del.php",{cid:userid}, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            //console.log(data);
            if (data.msg == 'success') {
                alert ('删除成功');
                window.location.href='user.php';
            }else{
                alert ('创始人不能删除！');
                window.location.href='user.php';
            };
        });
    })

    //user delete
    $('.btn-resetpw').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var userid = $this.data('cid');
        var thepval = $this.prev().val();
        $.post("user-resetpw.php",{cid:userid,userpw:thepval}, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            console.log(data);
            if (data.msg == 'success') {
                alert ('修改成功!');
                window.location.href='user.php';
            }
        });
    })

    //category add
    $('#btnAddcat').on('click',function (e) {
        e.preventDefault();
        var tagName = $('#tag').val(),
            tagLocal = $('#tagLocal').val();

        if(tagName && tagLocal){
            $.post("tag-add.php",{
                tag: tagName,
                tag_local: tagLocal
            }, function(data){
                data = JSON.parse(data); //将字符串转换为json对象
                if(data.msg == 'success'){
                    alert('添加成功！');
                    window.location = 'tags.php';
                }else{
                    alert('添加失败！');
                };
            });
        }else{
            alert('都是必填，谢谢！');
        }
    })

    //tag edit
    $('.btn-editcat').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var theTagId = $this.data('tid'),
            theTagLocal = $('#theTagLocal'+theTagId).val(),
            theTag = $('#theTag'+theTagId).val();

        $.post("tag-edit.php",{
                updateId:theTagId,
                deltId: "",
                tag_local:theTagLocal,
                tag:theTag
            }, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            console.log(data);
            if (data.msg == "success") {
                alert ('修改成功');
                window.location.href='tags.php';
            };
        });
    })

    //tag del
    $('.btn-delcat').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var theTagId = $this.data('tid');

        $.post("tag-edit.php",{
            deltId:theTagId,
            updateId:'',
            tag_local:"",
            tag:""
        }, function(data){
            data = JSON.parse(data);
            if (data.msg == "success") {
                alert ('删除成功');
                window.location.href='tags.php';
            };
        });
    })
});