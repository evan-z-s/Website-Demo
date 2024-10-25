<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $product = htmlspecialchars($_POST['product']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = "independencerobotics@gmail.com"; // Replace with your email address
    $subject = "New Pre-Order Request";
    
    // Email content
    $body = "Pre-Order Details:\n";
    $body .= "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Product: $product\n";
    $body .= "Quantity: $quantity\n";
    $body .= "Message: $message\n";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your pre-order, $firstName!";
    } else {
        echo "Sorry, there was an error processing your pre-order.";
    }
}
?>
