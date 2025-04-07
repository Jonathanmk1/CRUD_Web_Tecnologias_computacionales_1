<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Estudiante.php';

Estudiante::eliminar($_GET["id"]);

header("Location: mostrar_estudiantes.php");
?>
