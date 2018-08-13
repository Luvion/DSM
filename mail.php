<?php

$recepient = "dimasludinov@yandex.ru";
$sitename = "DSM";

$fname = trim($_POST["name-1"]);
$lname = trim($_POST["name-2"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$text = trim($_POST["message"]);
$message = "Имя: $fname \nФамилия: $lname \nПочта: $email \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
