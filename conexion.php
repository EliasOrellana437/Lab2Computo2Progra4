<?php
$host = "127.0.0.1:3307";
$user = "root";
$pass = "12345678"; // Cambiar si tienes contraseña en tu servidor local
$db   = "lab1C2";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>