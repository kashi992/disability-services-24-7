<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "admin@disabilityservices247.com.au";
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    if (mail($to, $subject, $email_content, $headers)) {
        header('location:thankYou.html');
        exit();

    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    echo "Sorry, this form cannot be submitted directly.";
}
?>