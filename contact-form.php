<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];


    $email_from = 'srishti.chowdhary8@gmail.com'

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "srishtic0710@gmail.com"  
    
    $headers = "From: $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);

?>
