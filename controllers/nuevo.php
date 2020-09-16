<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        //$this->view->render('nuevo/index');
        $this->view->mensaje = "";

    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarAlumno(){
        //echo $_POST['matricula'];
        //echo $_POST['nombre'];
        //echo $_POST['apellido'];
        
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $mensaje = "";

        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            $mensaje = "Alumno creado correctamente";
        }else{
            $mensaje = "La matricula ya existe";
        }
        
        $this->view->mensaje = $mensaje;
        $this->render();
        //$this->model->insert();
    }
}

?>