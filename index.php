<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conexion, $_POST['user']);
    $password = $_POST['pass'];

    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $query);

    if ($row = mysqli_fetch_assoc($resultado)) {
        // Verificamos la contraseña (asumiendo que usaste password_hash anteriormente)
        if (password_verify($password, $row['password'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: dashboard.php");
        } else {
            echo "<p class='error'>Contraseña incorrecta</p>";
        }
    } else {
        echo "<p class='error'>Usuario no encontrado</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Login - UGB</title>
</head>
<body>
    <form method="POST" class="login-form">
        <h2>Control de Usuarios</h2>
        <input type="text" name="user" placeholder="Usuario" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>