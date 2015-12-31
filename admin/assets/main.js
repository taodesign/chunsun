$(document).ready(function(){
    //cookie
    var jsCookie = {
        setCookie: function(name, value, exptime) {
            var now = new Date();
            var time = now.getTime();
            //var anhour = (exptime+8)*3600;//one hour Convert to Seconds
            var oneday = (exptime*24+8)*3600;//one day Convert to Seconds,+8 hours for china time zone
            time += oneday * 1000; //now millisecond + one day millisecond
            now.setTime(time);
            document.cookie = name+'='+value+';expires='+now.toUTCString();
        },
        getCookie: function (name){
            var cArr=document.cookie.split('; ');
            for(var i=0;i<cArr.length;i++){
                var cArr2=cArr[i].split('=');
                if(cArr2[0]==name){
                    return cArr2[1];
                }
            }
            return '';
        },
        removeCookie:function (name){
            jsCookie.setCookie(name, 1, -1);
        }
    }

    //login
    var isloginpage = $('.login').length;
    var islogged = jsCookie.getCookie('name');
    if (islogged && isloginpage) {
        window.location.href='caselist.php';
    }else if(!islogged && !isloginpage){
        window.location.href='admin.php';
    }
    $('#login').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var aName = $("input[name='aName']").val();
        var aPw = $("input[name='aPw']").val();

        $.post("login.php",{name:aName,passwd:aPw}, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            //console.log(data);
            if (data.msg == 'success') {
                jsCookie.setCookie('name', aName , 1);
                $('#title').text('登录成功！');
                $('#loginform').hide();
                $('body').css('background','#fff url(assets/loading.gif) no-repeat center center');
                setTimeout(function () {
                    window.location.href='caselist.php';
                },500);
            }else{
                alert ('用户名密码错误！');
            };
        });
    })
    document.onkeydown = function(){
        var event = event||window.event;
        if (event.keyCode == 13) {
            console.log(1);
            $('#login').trigger('click');
        }
    }

    //logout
    $('#logout').on('click',function (e) {
        jsCookie.removeCookie('name');
        window.location.href='admin.php';
    })

    //case delete
    $('.btn-del').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var caseid = $this.data('cid');
        $.post("del-case.php",{cid:caseid}, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            console.log(data);
            if (data.msg) {
                alert ('删除成功');
                window.location.href='caselist.php';
            };
        });
    })

    //register
    $('#regform').on('click', '#showRegPw', function (e){
        e.preventDefault();
        var $this = $(this);
        $this.attr('id','hideRegPw').text('隐藏');
        $('#regPw').attr('type','text')
    });
    $('#regform').on('click', '#hideRegPw' ,function (e){
        e.preventDefault();
        var $this = $(this);
        $this.attr('id','showRegPw').text('显示');
        $('#regPw').attr('type','password')
    });

    //vilacation
    function changing(){
        document.getElementById('checkpic').src="createcode.php?"+Math.random();
    }
    $('#checkpic').on('click',function (e){
        e.preventDefault();
        changing();
    })

    $('#regSubmit').on('click',function (e){
        e.preventDefault();
        var regName = $("input[name='regName']").val();
        var regMail = $("input[name='regMail']").val();
        var regPw = $("input[name='regPw']").val();
        var regVcode = $("input[name='regVcode']").val();

        $.post("register.php",{
            regName:regName,
            regMail:regMail,
            regPw:regPw,
            codeinput:regVcode
        }, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            console.log(data);
            if (data.vcode == 'match') {
                console.log('用户名密码正确！')
            }else{
                console.log('用户名密码错误！')
            };
        });
    });




    //category add
    $('#btnAddcat').on('click',function (e) {
        e.preventDefault();
        var cName = $('#cName').val(),
            cNameE = $('#cNameE').val();

        if(cName && cNameE){
            $.post("add-category-post.php",{
                category:cName,
                label:cNameE
            }, function(data){
                data = JSON.parse(data);//将字符串转换为json对象
                if(data.msg == 'success'){
                    alert('添加成功！');
                    window.location = 'add-category.php';
                };
            });
        }else{
            alert('都是必填，谢谢！');
        }
    })

    //category edit
    $('.btn-editcat').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var updateIdval = $this.data('cid');
        var cName = $('#cName'+updateIdval+'').val(),
            cNameE = $('#cNameE'+updateIdval+'').val(),
            cid = '';

        $.post("category-edit.php",{
                updateId:updateIdval,
                cid:'',
                category:cName,
                label:cNameE
            }, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            console.log(data);
            if (data.msg) {
                alert ('修改成功');
                window.location.href='add-category.php';
            };
        });
    })

    //category del
    $('.btn-delcat').on('click',function (e) {
        e.preventDefault();
        var $this= $(this);
        var caseid = $this.data('cid'),
            updateId;
        $.post("category-edit.php?cid="+caseid+"",{cid:caseid,updateId:''}, function(data){
            data = JSON.parse(data);//将字符串转换为json对象
            console.log(data);
            if (data.msg) {
                alert ('删除成功');
                window.location.href='add-category.php';
            };
        });
    })
});