<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
  </head>
  <body>
    <form action="contactform.php" method="post">
      <input type="text" name="full_name" placeholder="Full Name"><br>
      <input type="email" name="email" placeholder="Your e-mail address"><br>
      <input type="text" name="subject" placeholder="Subject"><br>
      <textarea name="message" rows="8" cols="80" placeholder="Type your message here."></textarea><br>
      <input type="submit" name="submit" value="Send Message">
    </form>
  </body>
</html>
