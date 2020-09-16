<?php
    if(isset($_POST['sendmail'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'pranjalgupta363@gmail.com';

    $email_body = "User Name: $name.\n". 
                    "User Email: $visitor_email.\n". 
                       "User Message: $message.\n";

    $to = "pranjalgupta362@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $visitor_email \r\n";

    mail($to,$subject,$email_body,$headers);

    header("Location: index.html");

    echo '<script>alert("Thank you for contacting me :)")</script>';
    echo '<script>window.location.href="index.html";</script>';

    }

?>