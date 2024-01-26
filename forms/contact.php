<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "admin@cartorioandrade.com.br"; // Replace with your email address
    $headers = "From: $name <$email>";

    // You can customize the email message as needed
    $email_message = "Subject: $subject\n\n";
    $email_message .= "From: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Use mail() function to send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar e-mail.";
    }
}
?>