<?php

if($_POST["submit"]) {
  $recipient="katinthecode@gmail.com";
  $subject=$_POST["subject"];
  $sender=$_POST["sender"];
  $senderEmail=$_POST["senderEmail"];
  $message=$_POST["message"];

  $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

  mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

  $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Katie Antlitz - Contact Me</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<div style="width: 100%;">
  <div style="width: 10%; float: left"><a href="index.html"><img src="img/donatello.jpg" width="100%" height="100%"/></a></div>
  <div class="topnav">
    <a href="index.html">Home</a>
    <a class="active" href="contact.php">Contact</a>
    <!--<a href="about.html">About</a>-->
  </div>
</div>
<br>
<div>
  <div style="text-align: center;"><h3>Contact Me</h3></div>
</div>

<div style="padding-left: 15%">
  <?=$thankYou ?>
  <br>
  <form method="post" action="contact.php">
    <label>Name:</label>
    <input name="sender">
    <br>
    <label>Email address:</label>
    <input name="senderEmail">
    <br>
    <label>Subject:</label>
    <input name="subject">
    <br>
    <label>Message:</label>
    <textarea rows="5" cols="20" name="message"></textarea>
    <br>
    <input type="submit" name="submit">
  </form>
</div>

<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
