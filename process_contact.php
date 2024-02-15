<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "mecdaddy09@gmail.com";
    $subject = "Nouveau message de contact";
    $message_content = "Nom: $first_name $last_name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $message_content);

    // Supprimer la redirection
    // header("Location: confirmation.html");
}
?>





