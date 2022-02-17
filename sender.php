<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $text = $_POST['text'];

	$to = "mr.igor070@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Сообщение: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>