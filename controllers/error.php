<?php

class Error404 extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('error/index');
        //echo "<p>Error al cargar el recurso</p>";
    }

}

?>