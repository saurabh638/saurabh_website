<?php
  $emailTo = "contact@saurabhsharma.info";
  $subject = "You have a new message from saurabhsharma.info";
  $name = trim(stripslashes($_POST['name'])); 
  $email = trim(stripslashes($_POST['email'])); 
  $message = trim(stripslashes($_POST['message']));  
  
  // prepare email body text
  $body = "";
  $body .= "Name: ";
  $body .= $name;
  $body .= "\n";
  $body .= "E-mail: ";
  $body .= $email;
  $body .= "\n";
  $body .= "Message: ";
  $body .= $message;
  $body .= "\n";
  mail($emailTo, $subject, $body);

?>