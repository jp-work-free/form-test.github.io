<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST['name'];
   $phone = $_POST['phone'];
    if (!ctype_digit($phone)) {
     echo "Номер телефона должен содержать только цифры.";
     exit;
       exit;
   }

   $to = 'jp-work-free@yandex.ru';
   $subject = 'Новый заказ обратного звонка';
   $message = "Имя: $name\nТелефон: $phone";
   if (mail($to, $subject, $message)) {
           echo "Спасибо, мы вам перезвоним!";
        exit; 
    } else {
       echo "Что-то пошло не так. Попробуйте ещё раз.";
   }
}
?>

