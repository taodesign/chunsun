<?php
require_once '../config.php';

$username = $_POST["username"];
$password = $_POST["userpw"];
$role = $_POST["userRole"];
$email = $_POST["userEmail"];

$sql = "SELECT username FROM users where username=?";
$stmt = mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ./index.php?errmsg=sqlerror");
    exit();
}else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if($resultCheck >0){
        header("Location: ./user-create.php?errmsg=usertaken");
        exit();
    }else {
        $sql = "INSERT INTO users (username, email, passwd, regtime, logtime) VALUES (?, ?, ?, ?, NOW(), NOW())";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./user-create.php?errmsg=sqlerror");
            exit();
        }else{
            $hashedPw = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPw); // ssss 的意思是4个string类型
            mysqli_stmt_execute($stmt);
            header("Location: ./user-create.php?user_create=success");
        }
        exit();
    }
}
mysqli_stmt_close($stmt);
mysqli_close($con);