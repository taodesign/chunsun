<?php
require_once '../config.php';

$name = $_POST["aName"];
//$postpw = md5($_POST["aPw"]);
$postpw = $_POST["aPw"];

$queryUser = mysqli_query($con, "select * from users where name='$name' and passwd='$postpw'");
$resultRow = mysqli_num_rows($queryUser);

if ($resultRow){
    //查到结果只有一行，所以得到第0行的usergroup字段的值，语句是：
    //$usergroup = mysql_result($queryUser,0,'usergroup');
    //在字段参数中指定数字偏移量比指定字段名或者 tablename.fieldname 要快得多
    $usergroup = mysqli_result($queryUser,0,5);

    //判断用户组
    if($usergroup=='administrator'){
        $jsArr = array('msg'=>'success','type'=> 'login');
        echo json_encode($jsArr);
        header("Location: caselist.php");
    }else{
        $jsArr = array('msg'=>'noAuth','type'=> 'login');
        echo json_encode($jsArr);
        header("Location: admin.php");
    }
    //set cookie
    setcookie("auth_token", md5($name), time()+9*3600, '/');
}else{
    $jsArr = array('msg'=>'false','type'=> 'login');
    echo json_encode($jsArr);
    header("Location: admin.php?username=$name&errmsg=err1");
}

mysqli_close($con);