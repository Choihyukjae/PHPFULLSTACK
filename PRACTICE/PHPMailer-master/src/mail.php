<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  require 'Exception.php';
  require 'PHPMailer.php';
  require 'SMTP.php';
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host        = 'smtp.naver.com';
  $mail->SMTPAuth    = true;
  $mail->Username    = 'wo4013@naver.com    ';
  $mail->Password    = '';
  $mail->SMTPSecure  = 'ssl';
  $mail->Port        = 465;
  $mail->setFrom('wo4013@naver.com', 'FROM');
  $mail->addAddress('wo4013@naver.com', 'TO');
  $mail->isHTML(true);
  $mail->Subject     = 'Here is the subject';
  $mail->Body        = 'This is the HTML message body <b>in bold!</b>';
  $mail->send();
  echo 'Message has been sent';
?>