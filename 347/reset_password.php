<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if the email exists in your database (you should have a user table)
    // If the email exists, generate a unique token, store it in the database,
    // and send a reset email with a link to reset_password_confirm.php
    // Example code to generate and store a token:
    
    // $token = bin2hex(random_bytes(32)); // Generate a random token
    // $hashed_token = password_hash($token, PASSWORD_DEFAULT); // Hash the token
    // Store $hashed_token in the database with the user's email
    
    // Now, send a reset email with a link to reset_password_confirm.php
    $reset_link = "http://yourwebsite.com/reset_password_confirm.php?token=" . $token;
    $to = $email;
    $subject = "Password Reset";
    $message = "Click the following link to reset your password: $reset_link";
    $headers = "From: taukirahmed815@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Password reset instructions have been sent to your email.";
    } else {
        echo "Error sending reset instructions.";
    }
}
?>
