<?php
$host = "localhost";
$user = "root";
$pass = ""; // Cambiar si tienes contraseña en tu servidor local
$db   = "XampTeOdio";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>