<?php

$to = "41262070@qq.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "mutaxia@qq.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>