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
        <h1 class="center">Seccion de nuevo</h1>
    </div>

    <div class="container my-3">
        <div class="row">
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
                <form action="<?php echo constant('URL');?>nuevo/registrarAlumno" method="POST">
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="number" class="form-control" id="matricula" name="matricula" placeholder="Ingrese la matricula" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre(s)" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido(s)" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-sm">
            
            </div>
        </div>
    </div>

    
    
    <?php require 'views/footer.php'; ?>
</body>
</html>