<?php
session_start();
require_once __DIR__ . '/../backend/db/conexion.php';

// Verificar conexión
if ($mysqli->connect_errno) {
    die("Falló la conexión: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';

// Sentencia preparada para evitar inyección SQL
$consulta = "SELECT * FROM login WHERE usuario=? AND contrasea=?";
$stmt = $mysqli->prepare($consulta);

if (!$stmt) {
    die("Error al preparar consulta: " . $mysqli->error);
}

$stmt->bind_param("ss", $usuario, $contraseña);
$stmt->execute();
$resultado = $stmt->get_result();

// Si encuentra coincidencias
if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: ../backend/controllers/mostrar_estudiantes.php");
    exit();
} else {
    $_SESSION['error'] = "Usuario o contraseña incorrectos";
    header("Location: index.php");
    exit();
}

// Cierre de recursos
$stmt->close();
$mysqli->close();
?>
