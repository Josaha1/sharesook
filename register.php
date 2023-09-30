<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $p_prefix = $_POST['p_prefix'];
    $p_name = $_POST['p_name'];
    $p_phone = $_POST['p_phone'];
    
    $p_role = $_POST['p_role'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $activationToken = bin2hex(random_bytes(32));

    // Insert user data into the database
    // Remember to establish a database connection first

    // Send verification email
    $verificationLink = "http://localhost/sharesook/verifypage.php?token=$activationToken";
    $subject = "Account Verification";
    $message = "Click the following link to verify your account: $verificationLink";
    mail($email, $subject, $message);

    // Store activation token in the database
}
