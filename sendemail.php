<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message']));
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
$headers .= "From <$from>";

mail("contact@diaa.ma", $subject, $message, $headers);

die;