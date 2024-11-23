<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>Has iniciado sesión correctamente.</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
