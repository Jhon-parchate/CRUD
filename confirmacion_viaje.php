<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Recuperar los datos de sesión
$nombre = $_SESSION['nombre'] ?? 'No proporcionado';
$edad = $_SESSION['edad'] ?? 'No proporcionado';
$fecha = $_SESSION['fecha'] ?? 'No proporcionado';
$vip = $_SESSION['VIP'] ?? 'No especificado';
$ciudad = $_SESSION['Seleccionar'] ?? 'No seleccionado';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Agencia de Viajes - Confirmación</title>
</head>
<body>
    <div class="container">
        <h1>¡Gracias por reservar con nosotros!</h1>
        <p>Hola, <?php echo $_SESSION['username']; ?>. Tu información de viaje ha sido registrada exitosamente.</p>
        <h2>Sobre Nosotros</h2>
        <p>En nuestra agencia de viajes, nos comprometemos a ofrecerte las mejores experiencias y servicios para que tu viaje sea inolvidable. ¡Esperamos verte pronto en tu próxima aventura!</p>

        <a href="index.php">Volver al inicio</a>
    </div>
</body>
</html>
