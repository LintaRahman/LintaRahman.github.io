<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'info@lintasportfolio.com';
    $email_subject = "New Message from Lintas Portfolio";
    $email_body = "You have received a new message from your website contact form.\n\n".
                    "Here are the details:\n\n
                    Name: $name\n\n
                    Email: $email\n\n
                    Phone: $phone\n\n
                    Subject: $subject\n\n
                    Message:\n$message";

    $to = 'lintarahman2212@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header('Location: index.html');
?>

