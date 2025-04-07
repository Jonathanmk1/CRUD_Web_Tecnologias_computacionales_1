<?php
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Estudiante.php';
require_once __DIR__ . '/../../frontend/components/encabezado.php';

$estudiante = Estudiante::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>

        <!-- 🔁 Botón para volver al inicio -->
        <a href="mostrar_estudiantes.php" class="btn btn-dark mb-3">← Volver al inicio</a>

        <form action="actualizar_estudiante.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $estudiante->id ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $estudiante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre completo">
            </div>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input value="<?php echo $estudiante->grupo ?>" name="grupo" required type="text" id="grupo" class="form-control" placeholder="Ej. 2°B">
            </div>
            <div class="form-group">
                <button class="btn btn-warning" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</div>
