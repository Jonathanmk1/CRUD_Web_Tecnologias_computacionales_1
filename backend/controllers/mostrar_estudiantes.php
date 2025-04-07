<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../../frontend/components/encabezado.php';
require_once __DIR__ . '/../clases/Estudiante.php';

$estudiantes = Estudiante::obtener();
?>

<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $e) { ?>
                    <tr>
                        <td><?php echo $e["nombre"] ?></td>
                        <td><?php echo $e["grupo"] ?></td>
                        <td><a class="btn btn-primary" href="notas_estudiante.php?id=<?php echo $e["id"] ?>">Notas</a></td>
                        <td><a class="btn btn-warning" href="editar_estudiante.php?id=<?php echo $e["id"] ?>">Editar</a></td>
                        <td><a class="btn btn-danger" href="eliminar_estudiante.php?id=<?php echo $e["id"] ?>">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
