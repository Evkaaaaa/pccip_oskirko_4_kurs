<?php
 $FIO = $_POST['FIO'];
 $email = $_POST['email'];
 $message = $_POST['mess'];

 $FIO  = htmlspecialchars($FIO);
 $email   = htmlspecialchars( $email );
 $message  = htmlspecialchars($message);

 $FIO  = urldecode($FIO);
 $email   = urldecode( $email );
 $message  = urldecode($message);

 $FIO  = trim($FIO);
 $email   = trim( $email );
 $message  = trim($message);


 if(mail("evelina.oskirko@mail.ru",
 "Новое письмо с сайта",
 "ФИО: ".$FIO."\n".
 "Email ".$email."\n".
 "Сообщение ".$message."\n",
 "Form: no-reply@mydomain.ru \r\n")){
    echo ('Письмо отправленно');
 }

else{
    echo ('Письмо не отправленно');
}

 ?>