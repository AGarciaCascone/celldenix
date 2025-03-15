
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "tucorreo@tudominio.com";  // Cambialo por tu correo
    $asunto = "Nuevo mensaje de tu sitio CellVioleta";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: $email";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<script>alert('Mensaje enviado con éxito');window.location='index.html';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje');history.back();</script>";
    }
} else {
    header("Location: index.html");
}
?>
