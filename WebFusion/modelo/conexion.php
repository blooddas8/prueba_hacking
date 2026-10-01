<?php
$host = 'mysql-webfusion.alwaysdata.net';  // Host de la base de datos
$usuario = 'webfusion';    // Usuario de la base de datos
$contraseña = 'yisusXD4545';     // Contraseña de la base de datos
$base_de_datos = 'webfusion_comentarios'; // Nombre de la base de datos

// Crear la conexión usando mysqli
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
