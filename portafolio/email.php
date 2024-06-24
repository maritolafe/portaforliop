<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $comentario = $_POST["comentario"];

    // Construir el cuerpo del mensaje
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Calificación: $rating\n";
    $mensaje .= "Comentario: $comentario\n";

    // Dirección de correo electrónico a la que se enviará el mensaje
    $destinatario = "zalaza.unlz@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo comentario recibido";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redireccionar o mostrar un mensaje de éxito
   // header("Location: gracias.html");
    exit();
}
?>
