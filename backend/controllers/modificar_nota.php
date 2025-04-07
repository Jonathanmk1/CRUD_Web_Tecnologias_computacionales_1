<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Nota.php';

$nota = new Nota($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota->guardar();

header("Location: notas_estudiante.php?id=" . $_POST["id_estudiante"]);
?>
