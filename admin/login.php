<?php
require_once '../config.php';

$name = $_POST["name"];
$postpw = md5($_POST["passwd"]);

$queryUser = mysql_query("select * from users where name='$name' and passwd='$postpw'");
$resultRow = mysql_num_rows($queryUser);

if ($resultRow){
    //查到结果只有一行，所以得到第0行的usergroup字段的值，语句是：
    //$usergroup = mysql_result($queryUser,0,'usergroup');
    //在字段参数中指定数字偏移量比指定字段名或者 tablename.fieldname 要快得多
    $usergroup = mysql_result($queryUser,0,5);

    //判断用户组
    if($usergroup=='administrator'){
        $jsArr = array('msg'=>'success','type'=> 'login');
        echo json_encode($jsArr);
    }else{
        $jsArr = array('msg'=>'noAuth','type'=> 'login', 'aaa'=>$usergroup);
        echo json_encode($jsArr);
    }
}else{
    $jsArr = array('msg'=>'false','type'=> 'login');
    echo json_encode($jsArr);
}

mysql_close($con);