<?php
  if (isset($_POST["submit"])) {
    $name = $_POST["full_name"];
    $email_from = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail_to = "daviddanyal99@protonmail.com";
    $txt = "Email via contact form from ".$name."."."\n\n".$message;
    $headers = "From: ".$email_from;

    mail($mail_to, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
  }
?>
