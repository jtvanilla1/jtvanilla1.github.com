<?php
// the message
$txt = message;
$name = name;
$fromEmail = fromEmail;
$to = "josiah.t.manning@biola.edu";
$subject = "Email from $name";
$headers = "From: $fromEmail" . "\r\n";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($to,$subject,$txt,$headers);
?>