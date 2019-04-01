$(document).ready(function(){

    //post delete
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

    //tag add
    $('#btnAddTag').on('click',function (e) {
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
    $('#btnEditTag').on('click',function (e) {
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
    $('#btnDelCat').on('click',function (e) {
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

    //user delete
    $('#btnDelUser').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var theUserId = $this.data('tid');

        $.post("user-del.php",{
            deltId:theUserId
        }, function(data){
            data = JSON.parse(data);
            if (data.msg == "success") {
                alert ('删除成功');
                window.location.href='user.php';
            };
        });
    })

    //tag del
    $('#updatePassword').on('click', function (e) {
        e.preventDefault();
        var $pw1 = $("input[name='newpasswd1']").val(),
            $pw2 = $("input[name='newpasswd2']").val();
        console.log($pw1);
        if ($pw1==$pw2) {
            $.post("user-update-password.php",{
                uid:$pw1,
                newpasswd1:$pw1,
                newpasswd2:$pw2
            }, function(data){
                data = JSON.parse(data);
                if (data.msg == "success") {
                    alert ('密码更改成功');
                    window.location.href='user.php';
                };
            });
        }else{
            alert ('两次密码输入不一致！');
        }
    })
});