<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'phpmailer/src/Exception.php';
   require 'phpmailer/src/PHPMailer.php';

   $mail = new PHPMailer(true);
   $mail->CharSet = 'UTF-8';
   $mail->setLanguage('ru', 'phpmailer/language/');
   $mail->IsHTML(true);

   $mail->setForm('skitnay@gmail.com');
   $mail->addAddress('sima9729@gmail.com');
   $mail->Subject = 'TEST';

   $body = '<h1>Получилось!</h1>';

   if(trim(!empty($_POST['name']))){
      $body.='<p><strong>Имя</strong> '.$POST['name'].'</p>';
   }
   if(trim(!empty($_POST['email']))){
      $body.='<p><strong>Email</strong> '.$POST['email'].'</p>';
   }
   
   $mail-.Body = $body;

   if (!$mail->send()) {
      $message = 'Error';
   } else {
      $message = 'Send Complete';
   }
   
   $response = ['message' => $message];

   header('Content-type: application/json');
   echo json_encode($response);
?>