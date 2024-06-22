<?php
//  Simular el procesamiento del formulario de contacto
$nombre = htmlspecialchars($_POST['nombre']);
$email = htmlspecialchars($_POST['email']);
$telefono = htmlspecialchars($_POST['telefono']);
$mensaje = htmlspecialchars($_POST['mensaje']);

// Simular el guardado de datos o el envío de correo
$success = true; 

if ($success) {
    $mensajeRespuesta = "¡Gracias, $nombre! Hemos recibido tu mensaje y te contactaremos pronto.";
} else {
    $mensajeRespuesta = "Lo sentimos, hubo un problema al procesar tu solicitud. Por favor, intenta nuevamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Veterinaria Maskotas - Contacto">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <title>Procesamiento de Contacto</title>
</head>
<body>
    <header>
      <h1>
        <a href="index.html"
          ><img id="img-logo" src="/assets/images/logo/logo.png" alt="Veterinaria Maskotas"
        /></a>
      </h1>
    </header>

    <main>
        <section id="resultado-contacto" class="resultado-contacto">
            <h2>Resultado del Contacto</h2>
            <p><?php echo $mensajeRespuesta; ?></p>
            <a href="/index.html" class="button-volver-inicio">Volver al Inicio</a>
        </section>
    </main>

    <footer>
        <p>© 2024 | Veterinaria Maskotas | Todos los derechos reservados</p>
    </footer>
</body>
</html>
