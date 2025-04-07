<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Materia.php';

Materia::eliminar($_GET["id"]);

header("Location: mostrar_materias.php");
?>
