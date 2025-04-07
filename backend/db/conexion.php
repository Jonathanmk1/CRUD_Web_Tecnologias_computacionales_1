<?php
$host = "db"; // Nombre del contenedor de la base de datos en Docker
$usuario = "edgar";
$contrasenia = "pass";
$base_de_datos = "escuela";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);

// Validar la conexión
if ($mysqli->connect_errno) {
    die("Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
?>
