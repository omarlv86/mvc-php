<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alumnos = [];

        //$this->view->render('consulta/index');
    }

    function render(){
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno(){

    }

    function actualizarAlumno(){

    }

    function eliminarAlumno(){
        
    }


}

?>