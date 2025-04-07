<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Estudiante.php';

$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"], $_POST["id"]);
$estudiante->actualizar();

header("Location: mostrar_estudiantes.php");
?>
