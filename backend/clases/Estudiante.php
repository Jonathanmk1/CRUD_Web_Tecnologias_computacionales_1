<?php
ob_start();

// Asegurarse de que la conexión exista
require_once __DIR__ . '/../db/conexion.php';

class Estudiante
{
    private $nombre, $grupo, $id;

    public function __construct($nombre, $grupo, $id = null)
    {
        $this->nombre = $nombre;
        $this->grupo = $grupo;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes (nombre, grupo) VALUES (?, ?)");
        $sentencia->bind_param("ss", $this->nombre, $this->grupo);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, grupo FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, grupo FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }

    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE estudiantes SET nombre = ?, grupo = ? WHERE id = ?");
        $sentencia->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
?>