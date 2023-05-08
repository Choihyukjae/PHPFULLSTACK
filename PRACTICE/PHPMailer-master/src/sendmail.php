<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  require 'Exception.php';
  require 'PHPMailer.php';
  require 'SMTP.php';
  $subject = 'hi';
  $content = 'hi';
  if ( !is_null( $subject ) ) {
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
  $mail->Subject     = $subject;
  $mail->Body        = $content;
  $mail->send();
  echo 'Message has been sent';
  $send = 'Yes';
  }
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <style>
      body { font-family: sans-serif; }
      input, textarea { font-family: sans-serif; }
      textarea { width: 600px; height: 300px; }
    </style>
  </head>
  <body>
    <?php
      if ( $send == 'Yes' ) {
        echo '<p>Message has been sent.</p>';
      }
    ?>
    <form action="mail.php" method="POST">
      <p><input type="text" name="subject" placeholder="제목" required /></p>
      <p><textarea name="content" required></textarea></p>
      <p><input type="submit" /></p>
    </form>
  </body>
</html>