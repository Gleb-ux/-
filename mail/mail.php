<?php

$recepient = "valhat33@mail.ru";
$siteName = "Грузотакси№1";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
$comment = trim($_POST["comment"]);
$message = "Имя: $name \nТелефон: $phone \nMail: $mail \nКомментарий: $comment";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>