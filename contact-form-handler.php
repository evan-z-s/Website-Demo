<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare the email
        $to = "independencerobotics@gmail.com"; // Change to your email
        $subject = "New message from contact form";
        $body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message. Please try again later.";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
}
?>
