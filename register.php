<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    try {
        $stmt->execute();
        header("Location: login.php");
    } catch (PDOException $e) {
        $error = "El nombre de usuario ya está en uso.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
</body>
</html>
