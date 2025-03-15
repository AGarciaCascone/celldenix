
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $email = htmlspecialchars($_POST['email']);
    $problema = htmlspecialchars($_POST['problema']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "tucorreo@tudominio.com";  // Cambialo por tu correo
    $asunto = "Nueva reserva de turno para reparación";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Problema: $problema\n";
    $contenido .= "Mensaje adicional:\n$mensaje";

    $headers = "From: $email";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<script>alert('Reserva de turno confirmada');window.location='index.html';</script>";
    } else {
        echo "<script>alert('Error al procesar la reserva');history.back();</script>";
    }
} else {
    header("Location: index.html");
}
?>
