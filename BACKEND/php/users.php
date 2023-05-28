<?php
// Conexión a la base de datos
$host = 'localhost';
$db = 'ejercicio_david';
$usuario = 'root';
$contraseña = '';

$conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $contraseña);

// Consulta de usuarios
$consulta = $conexion->query("SELECT * FROM user_profile");

$usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Cerrar la conexión
$conexion = null;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nombre']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>