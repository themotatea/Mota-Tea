<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'themoteatea@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo 'Thank you for your message. We will get back to you soon!';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>