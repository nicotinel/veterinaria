<?php
// Simular el procesamiento del formulario de inicio de sesión
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// Simular la validación de usuario
$success = true; 

if ($success) {
    $mensajeRespuesta = "¡Bienvenido! Has iniciado sesión exitosamente.";
} else {
    $mensajeRespuesta = "Lo sentimos, hubo un problema al iniciar sesión. Por favor, intenta nuevamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Veterinaria Maskotas - Inicio de sesión">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <title>Procesamiento de Inicio de Sesión</title>
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
        <section id="resultado-login" class="resultado-login">
            <h2>Resultado del Inicio de Sesión</h2>
            <p><?php echo $mensajeRespuesta; ?></p>
            <a href="/index.html" class="button-volver-inicio">Volver al Inicio</a>
        </section>
    </main>

    <footer>
        <p>© 2024 | Veterinaria Maskotas | Todos los derechos reservados</p>
    </footer>
</body>
</html>
