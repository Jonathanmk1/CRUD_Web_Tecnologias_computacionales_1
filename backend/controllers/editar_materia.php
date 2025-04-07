<?php
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../clases/Materia.php';
require_once __DIR__ . '/../../frontend/components/encabezado.php';

$materia = Materia::obtenerUna($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar materia</h1>

        <!-- 🔁 Botón para volver al inicio -->
        <a href="mostrar_estudiantes.php" class="btn btn-dark mb-3">← Volver al inicio</a>

        <form action="actualizar_materia.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $materia->id ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $materia->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Ej. Ciencias">
            </div>
            <div class="form-group">
                <button class="btn btn-warning" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</div>
