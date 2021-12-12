<?php 
    require_once "class/Crud.php";
    $crud = new Crud();
    $id = $_POST['_id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = new MongoDB\BSON\ObjectId($datos->_id);
?>

<?php require_once 'header.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container rounded border border-dark" style="background-color: white;">
        <h1 class="display-4 text-center"><b>Eliminar Registro</b></h1>
        <p class="lead">
            <div class="alert alert-danger border border-danger" role="alert"> 
                <h4 class="alert-heading text-center"><i class="fas fa-exclamation-triangle" style="color:red;"></i>&nbsp Advertencia &nbsp<i class="fas fa-exclamation-triangle" style="color:red;"></i></h4>
                <p class="text-center">¿Estas seguro de eliminar este registro?</p>
                <hr>
                <table class="table table-responsive mb-1">
                    <table class="table table-hover table-sm border-bordered table-striped text-center">
                        <thead class="thead-dark">
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                        </thead>
                        <tbody class="light">
                            <tr>
                                <td><?php echo $datos->nombre; ?></td>
                                <td><?php echo $datos->paterno; ?></td>
                                <td><?php echo $datos->materno; ?></td>
                                <td><?php echo $datos->fecha_nacimiento; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </table>
                <hr>
                <div class="row text-center">
                    <div class="col-sm-6">
                        <form action="procesos/eliminar.php" method="POST">
                            <input type="text" hidden name="idEliminar" value="<?php echo $idMongo; ?>">
                            <button class="btn btn-danger border border-dark" id="btn_eliminar"><i class="fas fa-trash-alt"></i>&nbsp Eliminar</button>
                        </form>
                    </div>
                    <div class="col-sm-6"><a href="index.php" class="btn btn-secondary border border-dark"><i class="fas fa-undo"></i>&nbsp Regresar</a></div>
                </div>
            </div>
        </p>
    </div>
</div>

<?php require_once 'scripts.php'; ?>