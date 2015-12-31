<?php

session_start();
function randomStr($len) {
    $strlib = "1a2s3d4f5g6hj8@k9qwert!yupzxcvbnm";
    mt_srand();
    $str = "";
    for ($i = 0; $i < $len; $i++) {
        $str .= $strlib[mt_rand(0, 30)];
    }
    return $str;
}

//随机生成的字符串
$codestr = randomStr(4);

//验证码图片的宽度
$width  = 360;

//验证码图片的高度
$height = 60;

//声明需要创建的图层的图片格式
@ header("Content-Type:image/png");

//创建一个图层
$vimg = imagecreate($width, $height);

//背景色
$back = imagecolorallocate($vimg, 0xFF, 0xFF, 0xFF);

//模糊点颜色
$pix  = imagecolorallocate($vimg, 187, 230, 247);

//字体色
$fontColor = imagecolorallocate($vimg, 41, 163, 238);

//绘模糊作用的点
mt_srand();
for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($vimg, mt_rand(0, $width), mt_rand(0, $height), $pix);
}

//输出字符
imagestring($vimg, 5, 160, 20, $codestr, $fontColor);

//输出矩形
imagerectangle($vimg, 0, 0, $width -1, $height -1, $fontColor);

//输出图片
imagepng($vimg);

imagedestroy($vimg);

$sCodestr = md5($codestr);

//选择 cookie
//SetCookie("verification", $str, time() + 7200, "/");

//选择 Session
$_SESSION["verification"] = $sCodestr;
?>