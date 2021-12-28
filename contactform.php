<?php
  if (isset($_GET["submit"])) {
    $name = $_GET["full_name"];
    $email_from = $_GET["email"];
    $subject = $_GET["subject"];
    $message = $_GET["message"];

    $mail_to = "daviddanyal99@protonmail.com";
    $txt = "Email via contact form from ".$name."."."\n\n".$message;
    $headers = "From: ".$email_from;

    mail($mail_to, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
  }
?>
