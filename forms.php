<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // $error = "";
  //
  // if (trim($name) == "")
  //   $error = "Введите Ваше имя";
  // else if (trim($email) == "")
  //   $error = "Введите Ваш email";
  // else if (trim($message) == "")
  //   $error = "Напишите сообщение";
  //
  // if ($error != "") {
  //   echo "$error";
  //   exit;
  // }
  // else {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message;
  // }

  $subject = "=?utf-8?B?".base64_encode("Сообщение с MySite")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain;charset=utf-8\r\n";
  mail('mizyurkine@gmail.com', $subject, $message, $headers);

  header('Location: /index.php');

  // $to = "mizyurkine@gmail.com";
  // $from = trim($_POST['email']);
  //
  // $message = htmlspecialchars($_POST['message']);
  // $message = urldecode($message);
  // $message = trim($message);
  //
  // $headers = "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();



  // $arr = array("first", "second", "third");
  // $_SESSION['arr'] = $arr;


  // echo "Вы зарегестрированны в сессию" . "<br />" . "<a href='..\secondpage.php'>Следующая страница</a>";



  // echo "$name<br />$email<br />$message";
?>
