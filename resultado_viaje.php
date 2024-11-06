<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agencia_viajes";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inicializa las variables
$nombre = $edad = $fecha = $vip = $ciudad_destino = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? 'No proporcionado';
    $edad = $_POST['edad'] ?? 'No proporcionado';
    $fecha = $_POST['fecha'] ?? 'No proporcionado';
    $vip = $_POST['VIP'] ?? 'No especificado';
    $ciudad_destino = $_POST['Seleccionar'] ?? 'No seleccionado';

    // Insertar los datos del viaje en la base de datos
    $sql = "INSERT INTO viajes (nombre, edad, fecha, vip, ciudad_destino) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $edad, $fecha, $vip, $ciudad_destino);

    if ($stmt->execute()) {
        // Redireccionar a la página de confirmación después de registrar el viaje
        header("Location: confirmacion_viaje.php");
        exit();
    } else {
        echo "Error al registrar el viaje: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
