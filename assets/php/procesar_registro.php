<?php
// Simular el procesamiento del formulario de registro
$nombre = htmlspecialchars($_POST['nombre']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$confirmation = htmlspecialchars($_POST['confirmation']);
$edad = intval($_POST['edad']);
$genero = htmlspecialchars($_POST['genero']);
$mascota = htmlspecialchars($_POST['mascota']);

// Simular el guardado de datos o la validación
$success = true; 

if ($success) {
    $mensajeRespuesta = "¡Gracias, $nombre! Te has registrado exitosamente.";
} else {
    $mensajeRespuesta = "Lo sentimos, hubo un problema al procesar tu registro. Por favor, intenta nuevamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Veterinaria Maskotas - Registro">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <title>Procesamiento de Registro</title>
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
        <section id="resultado-registro" class="resultado-registro">
            <h2>Resultado del Registro</h2>
            <p><?php echo $mensajeRespuesta; ?></p>
            <a href="/index.html" class="button-volver-inicio">Volver al Inicio</a>
        </section>
    </main>

    <footer>
        <p>© 2024 | Veterinaria Maskotas | Todos los derechos reservados</p>
    </footer>
</body>
</html>
