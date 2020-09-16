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
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover " >
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once 'models/alumno.php';
                            foreach($this->alumnos as $row){
                                $alumno = new Alumno();
                                $alumno = $row;
                            
                        ?>
                        <tr>
                            <td> <?php echo $alumno->matricula; ?> </td>
                            <td> <?php echo $alumno->nombre; ?> </td>
                            <td> <?php echo $alumno->apellido; ?> </td>
                            <td><a class="btn btn-primary" href="#">Editar</a></td>
                            <td> <a class="btn btn-danger" href="#">Eliminar</a></td>
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>