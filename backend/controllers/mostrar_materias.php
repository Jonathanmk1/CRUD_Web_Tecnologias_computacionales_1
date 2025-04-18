<?php
ob_start();
require_once __DIR__ . '/../db/conexion.php';
require_once __DIR__ . '/../../frontend/components/encabezado.php';
require_once __DIR__ . '/../clases/Materia.php';

$materias = Materia::obtener();
?>

<div class="row">
    <div class="col-12">
        <h1>Listado de materias</h1>
        <a href="formulario_registro_materia.php" class="btn btn-info my-2">Nueva</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $m) { ?>
                    <tr>
                        <td><?php echo $m["nombre"] ?></td>
                        <td><a class="btn btn-warning" href="editar_materia.php?id=<?php echo $m["id"] ?>">Editar</a></td>
                        <td><a class="btn btn-danger" href="eliminar_materia.php?id=<?php echo $m["id"] ?>">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
