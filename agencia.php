<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Agencia de Viajes</title>
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
        <form method="POST" action="resultado_viaje.php">
    <label>Digite su Nombre y apellidos</label>
    <input type="text" name="nombre" required placeholder="Digite nombre" /><br/><br>
    
    <label>Digite su Edad</label>
    <input type="number" name="edad" min="1" max="90" required placeholder="Edad" /><br/><br>
    
    <label>Seleccione fecha de viaje </label>
    <input type="date" name="fecha" required/><br/><br>
    
    <label for="VIP">Es usted un cliente VIP?</label><br/>
    <input type="radio" name="VIP" value="si" required>Sí<br/>
    <input type="radio" name="VIP" value="no">No<br/>
    
    <label>Seleccione Ciudad Destino</label><br/>
    <select name="Seleccionar" required>
        <option value="">--Seleccione--</option>
        <option value="Madrid">Madrid</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Bilbao">Bilbao</option>
        <option value="Barcelona">Barcelona</option>
    </select>
    <br><br>
    
    <input type="submit" value="Guardar!!" />
</form>
        <a href="logout.php">Cerrar Sesión</a>
    </div>
</body>
</html>
