<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agencia_viajes";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
