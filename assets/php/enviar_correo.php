<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "samuellajud.trabajo@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
    $subject = "Mensaje de contacto de $name";
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";
    
    // Envía el correo
    if (mail($to, $subject, $body)) {
        echo "El mensaje se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>