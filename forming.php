<?php
   $name = $_POST['email'];
   $visitor_email = _$POST['email'];
$message = $_POST['message'];

$email_from = '1vidushi.pandey2021@vitbhopal.ac.in';
$email_subject = "New Form Submission"
    $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n".
                           "User Message: $message.\n;
  $to = "11vid3vid2004@gmail.com";
  $headers = "From $email_from\r\n";
  $headers .= "Reply-To: $visitor_email\r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: index.html");
  ?>
