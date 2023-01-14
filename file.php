<?php

$name = $_POST['name']:
$email = $_POST['email']:
$message = $_POST['message']:

$mailheader = "From:" .$name."<" .$email. ">\r\n";

$recipient = "developermac24@gmail.com"

mail($recipient, $message, $mailheader)
or die("Error");

echo '
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="STYLE1.CSS">
  <form id="contact-form-id" class="contact-form-class" method="post" action="file.php">

  <title>FEED BACK</title>
</head>
<body>
  <section class="contact">
   <h1>Thank you for contacting me.I will get back to you as soon as possible!</h1>
   <p class="back">GO back to the <a href="index.html">Homepage</a>.</p>

   </section>
   <body>
   </html>

';
?>
