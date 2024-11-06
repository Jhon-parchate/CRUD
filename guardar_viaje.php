<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $vip = $_POST['vip'];
    $ciudad = $_POST['ciudad'];

    $query = "INSERT INTO viajes (nombre, edad, fecha, vip, ciudad) VALUES ('$nombre', $edad, '$fecha', '$vip', '$ciudad')";

    if ($conn->query($query) === TRUE) {
        echo "Información del viaje guardada exitosamente.";
        echo '<br><a href="agencia.php">Volver a la página principal</a>';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
