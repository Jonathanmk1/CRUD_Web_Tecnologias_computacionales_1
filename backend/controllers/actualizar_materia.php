<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Materia.php';

$materia = new Materia($_POST["nombre"], $_POST["id"]);
$materia->actualizar();

header("Location: mostrar_materias.php");
?>
