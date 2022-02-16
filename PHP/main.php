<?php
ini_set("SMTP", "web");
ini_set("smtp_port", "25");
ini_set("sendmail_from", "your_user@gmail.com");
$msg = $_POST['message'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
mail($_POST['email'], "Contact us", $msg);
