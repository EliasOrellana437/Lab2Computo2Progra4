<?php
session_start();
include("conexion.php");

// Seguridad: Si no hay sesión, regresa al login
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Lógica para insertar datos (Validación básica)
if (isset($_POST['registrar'])) {
    $item = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $cat  = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $cant = intval($_POST['cantidad']);

    if (!empty($item) && !empty($cat) && $cant > 0) {
        $sql = "INSERT INTO registros (nombre_item, categoria, cantidad) VALUES ('$item', '$cat', $cant)";
        mysqli_query($conexion, $sql);
    }
}

// Consulta para la tabla (Ordenada por nombre)
$res = mysqli_query($conexion, "SELECT * FROM registros ORDER BY nombre_item ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilos.css">
    <title>Panel de Datos</title>
</head>
<body>
    <header>
        <span>Bienvenido: <?php echo $_SESSION['usuario']; ?></span>
        <a href="logout.php">Cerrar Sesión</a>
    </header>

    <section class="contenedor">
        <form method="POST" class="data-form">
            <h3>Nuevo Registro</h3>
            <input type="text" name="nombre" placeholder="Nombre del item" required>
            <input type="text" name="categoria" placeholder="Categoría" required>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <button type="submit" name="registrar">Guardar</button>
        </form>

        <table class="tabla-datos">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Categoría</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php while($f = mysqli_fetch_assoc($res)): ?>
                <tr>
                    <td><?php echo $f['nombre_item']; ?></td>
                    <td><?php echo $f['categoria']; ?></td>
                    <td><?php echo $f['cantidad']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>
</body>
</html>