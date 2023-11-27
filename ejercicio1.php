<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "tareasdb";

$conexion = new mysqli($servidor, $usuario, $clave, $basedatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
<!-- Ejemplo de estructura HTML básica -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Contenido de la página -->
    <div id="app">
        <!-- Interfaz de usuario para la lista de tareas -->
    </div>

    <!-- Scripts JS al final del cuerpo para mejorar el rendimiento -->
    <script src="app.js"></script>
</body>
</html>
