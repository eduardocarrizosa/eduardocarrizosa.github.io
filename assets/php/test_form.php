<?php
   $to = “asavel@gmail.com“;
   $subject = “Test mail”;
   $message = “Hello! This is a simple test email message.”;
   $from = “asavel@gmail.com“;
   $headers = “From:” . $from;
   mail($emailTo, $subjectTitle, $body, $headers, '-f'.$From);
   echo “Mail Sent.”;
?>
