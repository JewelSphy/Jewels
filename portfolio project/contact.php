<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Recipient's email address
    $to = "jeweljjsterling@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Submission";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email using the mail() function
    $mail_sent = mail($to, $email_subject, $email_message, $headers);

    if ($mail_sent) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "An error occurred. Please try again later.";
    }
}
?>
