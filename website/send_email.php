<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "nocosttutoring@gmail.com"; // Replace with your email address
    $sender_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create email headers
    $headers = "From: $sender_email\r\n";
    $headers .= "Reply-To: $sender_email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Attempt to send the email
    if (mail($recipient, $subject, $message, $headers)) {
        echo "<script>alert('Your email has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your email. Please try again later.');</script>";
    }
}
?>