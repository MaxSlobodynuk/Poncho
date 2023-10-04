<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];

	$to = "maxslobodyanyuk573@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Імя: $name 
    Телефон: $phone 
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
