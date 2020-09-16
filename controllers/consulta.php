<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        //$this->view->render('consulta/index');
    }

    function render(){
        $this->view->render('consulta/index');
    }


}

?>