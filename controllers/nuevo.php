<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');

    }

    function registrarAlumno(){
        //echo $_POST['matricula'];
        //echo $_POST['nombre'];
        //echo $_POST['apellido'];
        
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            echo "Alumno creado correctamente";
        }
        
        //$this->model->insert();
    }
}

?>