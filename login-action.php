<?php
require_once 'config.php';

$name = $_POST["aName"];
$postpw = md5($_POST["aPw"]);

$queryUser = mysql_query("select * from users where name='$name' and passwd='$postpw'");
$resultRow = mysql_num_rows($queryUser);

if ($resultRow){
    //查到结果只有一行，所以得到第0行的usergroup字段的值，语句是：
    //$usergroup = mysql_result($queryUser,0,'usergroup');
    //在字段参数中指定数字偏移量比指定字段名或者 tablename.fieldname 要快得多
    $usergroup = mysql_result($queryUser,0,5);
    $userslat = mysql_result($queryUser,0,6);

    //判断用户组
    if($usergroup=='administrator'){
        $jsArr = array('msg'=>'success','type'=> 'login');
        echo json_encode($jsArr);
        header("Location: admin/caselist.php");
    }else{
        $jsArr = array('msg'=>'noAuth','type'=> 'login');
        echo json_encode($jsArr);
        header("Location: index.php");
    }
    //set session
    session_start();
    $_SESSION["auth_token"] = md5($name.$userslat);
    //set cookie
    setcookie("auth_token", md5($name.$userslat), time()+9*3600, '/');
}else{
    $jsArr = array('msg'=>'false','type'=> 'login');
    echo json_encode($jsArr);
    header("Location: login.php?username=$name&errmsg=err1");
}

mysql_close($con);