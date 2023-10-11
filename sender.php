<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$to = "ecom8563@gmail.com"; 
$date = date("d.m.Y"); 
$time = date("h:i");
$from = "ecom8563@gmail.com";
$subject = "Заявка c сайта";

$headers = "From: ecom8563@gmail.com\r\n";

$msg = "
Ім'я: $name 
Телефон: $phone 
Дата: $date 
Час: $time
";

mail($to, $subject, $msg, $headers);
?>

<div style="background-color: chartreuse; padding: 10px; max-width: 100%; border-radius: 8px;" class="status-ok">
    <h2 style="font-family: Nunito,sans-serif; font-weight: 600; font-size: 14px; color: #000000; text-align: center;" class="status-title-ok">Ви залишили заявку, протягом 30 хвилин менеджер зателефонує вам!</h2>
    <p 
	style="
	font-family: Nunito,sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: #000000;
    text-align: center;" 
	class="status-paragraph-ok">
	Слава Україні!
	</p>
</div>