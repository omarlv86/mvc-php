<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div class="container my-4">
        <div class="row">
            <h1 class="center">Seccion de consulta</h1>
        </div>
        <div class="row text-center" id="respuesta">

        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover " >
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tbody-alumnos">
                        <?php
                            include_once 'models/alumno.php';
                            foreach($this->alumnos as $row){
                                $alumno = new Alumno();
                                $alumno = $row;
                            
                        ?>
                        <tr id="fila-<?php echo $alumno->matricula; ?>">
                            <td> <?php echo $alumno->matricula; ?> </td>
                            <td> <?php echo $alumno->nombre; ?> </td>
                            <td> <?php echo $alumno->apellido; ?> </td>
                            <td><a class="btn btn-primary" href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Editar</a></td>
                            <td><button class="btn btn-warning bEliminar" data-matricula="<?php echo $alumno->matricula; ?>">Eliminar</button></td>
                            <!--
                            <td> <a class="btn btn-danger" href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula; ?>">Eliminar</a></td>
                            -->
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <?php require 'views/footer.php'; ?>

    <script src="<?php echo constant('URL');?>public/js/main.js"></script>
</body>
</html>