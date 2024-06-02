<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Dirección de correo a la que se enviarán los mensajes
    $to = "xmisael33456@gmail.com";  // Cambia esto a tu dirección de correo electrónico
    $subject = "Mensaje de $nombre desde el Blog de Viajes";
    $body = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje:\n$mensaje";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje. Inténtalo de nuevo más tarde.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
