<?php
   $to = “asavel@gmail.com“;
   $subject = “Test mail”;
   $message = “Hello! This is a simple test email message.”;
   $from = “sender@emailaddress.here“;
   $headers = “From:” . $from;
   mail($to,$subject,$message,$headers);
   echo “Mail Sent.”;
?>
