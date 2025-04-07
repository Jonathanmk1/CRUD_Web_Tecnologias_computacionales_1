<?php require_once __DIR__ . '/../../frontend/components/encabezado.php'; ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de materia</h1>

        <!-- 🔁 Botón para volver al inicio -->
        <a href="mostrar_estudiantes.php" class="btn btn-dark mb-3">← Volver al inicio</a>

        <form action="guardar_materia.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Ej. Matemáticas">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
