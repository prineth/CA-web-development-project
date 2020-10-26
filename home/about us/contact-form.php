<?php 
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];

   $email_from = 'Travel@avishka.com';

   $email_subject = "New Form Submission";

   $email_body = "User Name: $name.\n".
                   "User Email: $visitor_email.\n"
                      "User Message: $message.\n";

   $to = "avishka9966@gmail.com";

   $headers = "From: $email_from \r\n";

   $headers = "Reaply-To: $visitor_email \r\n";

   mail($to,$email_subject,$email_body,$headers);

   header("Location: index.html");



 ?>