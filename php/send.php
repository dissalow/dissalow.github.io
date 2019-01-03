<?php


$name = $_POST['name'];
$telephone = $_POST['phone'];

$name = htmlspecialchars(urldecode(trim($name)));
$telephone = htmlspecialchars(urldecode(trim($telephone)));


$to = 'mail@mail.ua';
$subject = 'Запись на ресницы';
$message = "Имя: $name, Телефон: $telephone";
$sub = 'From: info@novatech-sto.com.ua \r\n';
$headers = "Content-Type: text/html; charset=UTF-8";

mail($to, $subject, $message, $headers);