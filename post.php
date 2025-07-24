<?php

$recepient = "jeka.wild.work@gmail.com";                    //Почта куда будут приходить письма
$subject = "Заявка с сайта Форма обратной связи ajax";      //Сообщение
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: jp-work@yandex.ru <jp-work@yandex.ru>\r\n"; 

$name = trim($_POST["name"]);
$phone = trim($_POST["tel"]);
$email = trim($_POST["email"]);
// $massage = trim($_POST["massage"]);                      // Опционально, можно включить обратно

$message = "Имя: $name <br/> Телефон: $phone <br/> Почта: $email";        // Опционально можно добавить после последнего <br/> - Сообщение: $massage"

mail($recepient, $subject, $message, $headers);

