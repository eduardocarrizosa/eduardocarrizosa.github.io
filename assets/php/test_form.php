<?php
   $to = “asavel@gmail.com“;
   $subject = “Test mail”;
   $message = “Hello! This is a simple test email message.”;
   $From = “asavel@gmail.com“;
   $headers = “From:” . $from;
   mail($to, $subject, $message, $headers, '-f'.$From);
   echo “Mail Sent.”;
?>
