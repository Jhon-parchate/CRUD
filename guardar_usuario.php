<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar contraseña

    $query = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    if ($conn->query($query) === TRUE) {
        echo "Registro exitoso. <a href='login.php'>Inicia sesión aquí</a>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
