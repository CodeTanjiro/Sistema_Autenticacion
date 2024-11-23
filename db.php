<?php
$host = 'localhost';
$dbname = 'auth_system';
$username = 'edison1150'; // Cambia según tu configuración
$password = '1150239620'; // Cambia según tu configuración

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
