<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../../frontend/components/encabezado.php';
require_once __DIR__ . '/../clases/Estudiante.php';
require_once __DIR__ . '/../clases/Materia.php';
require_once __DIR__ . '/../clases/Nota.php';

$estudiante = Estudiante::obtenerUno($_GET["id"]);
$materias = Materia::obtener();
$notas = Nota::obtenerDeEstudiante($estudiante->id);
$materiasConCalificacion = Nota::combinar($materias, $notas);
?>
<div class="row">
    <div class="col-12">
        <h1>Notas de <?php echo $estudiante->nombre ?></h1>

        <!-- 🔁 Botón para volver al inicio -->
        <a href="mostrar_estudiantes.php" class="btn btn-dark mb-3">← Volver al inicio</a>
    </div>

    <div class="col-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materiasConCalificacion as $m) { ?>
                    <tr>
                        <td><?php echo $m["nombre"] ?></td>
                        <td>
                            <form action="modificar_nota.php" method="POST">
                                <input type="hidden" name="id_materia" value="<?php echo $m["id"] ?>">
                                <input type="hidden" name="id_estudiante" value="<?php echo $estudiante->id ?>">
                                <input type="number" step="any" min="0" max="10" name="puntaje" value="<?php echo $m["puntaje"] ?>">
                                <button class="btn btn-success">Guardar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
