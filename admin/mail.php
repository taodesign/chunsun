<?php

$to = "taoland@outlook.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "westup@qq.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>